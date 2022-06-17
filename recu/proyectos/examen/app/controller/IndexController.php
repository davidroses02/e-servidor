<?php
namespace App\Controller;

use App\Models\Usuarios;
use App\Models\Medicos;
use App\Models\Pacientes;
use App\Models\Citas;

class IndexController extends BaseController {
    
    
    public function login() 
    {
        function comprobarNumAleatorios($numeros)
        {
            $bandera = true;
            foreach ($numeros as $numero) {
                if ($numero % 2 == 0) {
                    $bandera = false;
                }
            }
            return $bandera;
        }

        if (isset($_POST['login'])) {

            $procesaFormulario = true;
            $error = false;
            $data = array();

            if (empty($_POST['usuario'])) {
                $procesaFormulario = true;
                $error = true;
                $data['error_usuario'] = 'El usuario es obligatorio';
            }
            
            if (empty($_POST['password'])) {
                $procesaFormulario = true;
                $error = true;
                $data['error_password'] = 'La password es obligatorio';
            }

            if (comprobarNumAleatorios($_POST['numerosAleatorios'])) {
                $procesaFormulario = true;
                $error = true;
                // comprobar que los numeros elegidos son pares
                $data['error_numeros'] = 'Los números elegidos no son pares';
            }
                
            if ($error) {
                $this->renderHTML('../app/view/index_view.php', $data);
            }

            if ($procesaFormulario) {
                $usuario = new Usuarios();
                $usuario->setUsuario($_POST['usuario']);
                $usuario->setPassword($_POST['password']);

                $data = $usuario->login();
                if ($data) {
                    $id = $data['id'];
                    // aqui con este id tengo que buscar en las tablas paciente y medico. where idUsuario = $id
                    $objMedico = new Medicos();
                    $objMedico->setUsuariosId($id);
                    $objPaciente = new Pacientes();
                    $objPaciente->setUsuariosId($id);
                    $datos = array();
                    if ($datos = $objMedico->getEntity($id)) {

                        $data['datosMedico'] = $datos;
                        $_SESSION['perfil'] = 'medico';
                        $_SESSION['id'] = $id;
                        $_SESSION['hora'] = date('H:i:s');
                        // crear objeto cita
                        $cita = new Citas();
                        $cita->setMedicosId($data['datosMedico'][0]['id']);
                        $data['cita'] = $cita->getById_medico();
                        // crear objeto paciente
                        $objPaciente = new Pacientes();
                        $objPaciente->setUsuariosId($data['cita'][0]['pacientes_id']);
                        $data['datosPaciente'] = $objPaciente->getEntityPaciente();
                        $_SESSION['datosFormConsulta'] = $data;
                        $this->renderHTML('../app/view/medico/medico_view.php', $data);
                    
                    } elseif ($datos = $objPaciente->getEntity($id)) {
                        $_SESSION['perfil'] = 'paciente';
                        $_SESSION['id'] = $id;
                        $_SESSION['hora'] = date('H:i:s');
                        $data['datosPaciente'] = $datos;
                        // con el id recoger row de ese paciente
                        $cita = new Citas();
                        $cita->setPacientesId($id);
                        $data['cita'] = $cita->getById_paciente();
                        // recorrer el array de citas y mostrar el id del medico
                        foreach ($data['cita'] as $key => $cita) {
                            $objMedico = new Medicos();
                            $objMedico->setId($cita['medicos_id']);
                            $data['cita'][$key]['medico'] = $objMedico->getEspecialidadesId($cita['medicos_id'])[0];
                            $data['cita'][$key]['especialidad'] = $objMedico->getEspecialidad($data['cita'][$key]['medico']['especialidades_id'])[0];
                            $idUsuario_medico = $objMedico->getIdUsuario($data['cita'][$key]['medicos_id']);
                            $objUsuario = new Usuarios();
                            $data['cita'][$key]['usuario'] = $objUsuario->getEntity($idUsuario_medico[0]['usuarios_id']);

                        }
                        $this->renderHTML('../app/view/paciente/paciente_view.php', $data);

                    } else {
                        $_SESSION['perfil'] = 'admin';
                        $_SESSION['id'] = $id;
                        $_SESSION['hora'] = date('H:i:s');
                        $this->renderHTML('../app/view/admin/admin_view.php', $data);
                    }

                }
            }

        } else {
            $this->renderHTML('../app/view/index_view.php');
        }

        
    }
    

}