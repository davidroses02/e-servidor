<?php
namespace App\Controller;

use App\Models\Usuarios;
use App\Models\Medicos;
use App\Models\Pacientes;
use App\Models\Citas;
use App\Models\Consultas;

class ConsultaController extends BaseController {
    
    
    public function crearConsulta() 
    {
        if (isset($_POST['consulta'])) {
                
            $procesaFormulario = true;
            $error = false;
            $data = array();

            if (empty($_POST['paciente'])) {
                $procesaFormulario = true;
                $error = true;
            }

            if (empty($_POST['diagnostico'])) {
                $procesaFormulario = true;
                $error = true;
            }

            if (empty($_POST['observaciones'])) {
                $procesaFormulario = true;
                $error = true;
            }

            if (empty($_POST['tratamiento'])) {
                $procesaFormulario = true;
                $error = true;
            }

            if (empty($_POST['medico'])) {
                $procesaFormulario = true;
                $error = true;
            }

            if (empty($_POST['idCita'])) {
                $procesaFormulario = true;
                $error = true;
            }

            if ($procesaFormulario) {
                $fecha = date('Y-m-d H:i:s');

                $consulta = new Consultas();
                $consulta->setMedicosId($_POST['medico']);
                $consulta->setPacientesId($_POST['paciente']);
                $consulta->setDiagnostico($_POST['diagnostico']);
                $consulta->setObservaciones($_POST['observaciones']);
                $consulta->setTratamiento($_POST['tratamiento']);
                $consulta->setCitasId($_POST['idCita']);
                $consulta->setFechaHora($fecha);
                $consulta->setEntity();
                // header al index
                header('Location: index.php');
            }

            
        } else {
            $this->renderHTML('../app/view/medico/medico_crear.php', $_SESSION['datosFormConsulta']);
        }
        
    }
    

}