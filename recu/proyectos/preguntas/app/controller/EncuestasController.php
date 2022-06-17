<?php
namespace App\Controller;

use App\Models\Preguntas;
use App\Models\Usuarios;
use App\Models\Encuestas;
use App\Models\EncuestasPreguntas;
use App\Models\Opciones;

class EncuestasController extends BaseController {

    public function crearEncuestas() {
        $data = array();
        $data['presentacion'] = $_SESSION['data'];
        $objPreguntas = new Preguntas();
        $data['allPreguntas'] = $objPreguntas->getAll();

        if (isset($_POST['guardar'])) {
            
            $procesaFormulario = true;
            $error = false;

            if (empty($_POST['encuesta'])) {
                $procesaFormulario = true;
                $error = true;
            }

            if (empty($_POST['preguntas'])) {
                $procesaFormulario = true;
                $error = true;
            }

            if ($error) {
                $data['error_pregunta'] = 'La pregunta es obligatoria';
                $this->renderHTML('../app/view/preguntas/crear_encuesta.php', $data);
            }

            if ($procesaFormulario) {
                $objEncuesta = new Encuestas();
                $objEncuesta->setNombre_encuesta($_POST['encuesta']);
                $objEncuesta->setEntity();
                $arrEncuesta = $objEncuesta->getLastId();
                $idEncuesta = $arrEncuesta[0]['id_encuesta'];

                $objEncuestaPregunta = new EncuestasPreguntas();
                $preguntas = $_POST['preguntas'];
                for ($i=0; $i < count($preguntas); $i++) { 
                    $objEncuestaPregunta->setId_encuesta($idEncuesta);
                    $objEncuestaPregunta->setId_pregunta($preguntas[$i]);
                    $objEncuestaPregunta->setEntity();
                } 
                $this->renderHTML('../app/view/admin/crear_encuesta.php', $data);
               
            }
            
        } else {
            $this->renderHTML('../app/view/admin/crear_encuesta.php', $data);
        }

    }

    public function responderEncuesta() {
        $data = array();
        $data['presentacion'] = $_SESSION['data'];
        // obtener todas las encuestas
        $objEncuesta = new Encuestas();
        $data['allEncuestas'] = $objEncuesta->getAll();

        if (isset($_POST['actualizar'])) {

            // recorrer $_POST['encuesta'] e imprimir la encuesta, las preguntas y las respuestas
            $encuesta = $_POST['encuesta'];
            $objEncuestaPregunta = new EncuestasPreguntas();
            $objEncuestaPregunta->setId_encuesta($encuesta);
            $data['AllPreguntas'] = $objEncuestaPregunta->getAllByEncuesta();
            // id de las preguntas
            echo '<pre>';
            print_r($data['AllPreguntas']);
            echo '</pre>';
            // recorrer allPreguntas y imprimir las preguntas y las respuestas
            foreach ($data['AllPreguntas'] as $key => $value) {
                //echo $value['id_pregunta'];
                $objOpciones = new Opciones();
                $objOpciones->setId_pregunta($value['id_pregunta']);
                $opciones = $objOpciones->getAllByPregunta();
                echo '<pre>';
                print_r($opciones);
                echo '</pre>';
            }
            exit;


            
        } else {
            $this->renderHTML('../app/view/usuario/responder_encuesta.php', $data);
        }
        
    }

}