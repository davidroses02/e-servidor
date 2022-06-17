<?php
namespace App\Controller;

use App\Models\Usuarios;
use App\Models\Medicos;
use App\Models\Pacientes;
use App\Models\Citas;
use App\Models\Especialidades;

class MedicoController extends BaseController {
    
    
    public function crearMedico() 
    {
        $data = array();
        if (isset($_POST['crearMedico'])) {
            $procesaFormulario = true;
            $error = false;
            $data = array();

            if (empty($_POST['nombre'])) {
                $procesaFormulario = true;
                $error = true;
            }

            if (empty($_POST['password'])) {
                $procesaFormulario = true;
                $error = true;
            }

            if (empty($_POST['especialidad'])) {
                $procesaFormulario = true;
                $error = true;
            }

            if (empty($_POST['usuario'])) {
                $procesaFormulario = true;
                $error = true;
            }

            if ($procesaFormulario) {
                // insertar en la base de datos el usuario
                $usuario = new Usuarios();
                $usuario->setNombre($_POST['nombre']);
                $usuario->setPassword($_POST['password']);
                $usuario->setUsuario($_POST['usuario']);
                $usuario->setEntity();
                $lastId = $usuario->getLastId();
                $medico = new Medicos();
                $medico->setUsuariosId($lastId);
                $medico->setEspecialidadesId($_POST['especialidad']);
                $medico->setEntity();
                header('Location: index.php');

            }

        } else {
            // objeto de especialidades
            $especialidades = new Especialidades();
            $data['especialidades'] = $especialidades->getAll();
            $this->renderHTML('../app/view/admin/admin_crear.php', $data);
        }
        
    }
    

}