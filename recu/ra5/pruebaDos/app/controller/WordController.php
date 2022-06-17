<?php 

namespace App\Controller;

use App\Models\Capital;

class WordController extends BaseController{

    public function addWord() {
        if (isset($_POST)) {
            $data = array();
            $procesaform = false;
            $data['word'] = "";


            if (!empty($_POST['word'])) {
                $procesaform = true;
                $data['word'] = $_POST['word'];
            }
            
            
            if ($procesaform) {
                $capital = new Capital();
                $capital->setWord($data['word']);
                $capital->setEntity();
                header("location:" . DIRBASEURL . "/");
            } else {
                $this->renderHTML("../app/view/addWord_view.php", $data);  
            }
        } else {
            $this->renderHTML("../app/view/addWord_view.php", "");
        }
    }

    public function editWord() {
        if (isset($_POST['enviar'])) {
            $procesaForm = false;
            $data = array();

            if (!empty($_POST['word'])) {
                $procesaform = true;
                $data['word'] = $_POST['word'];
            }

            if (!empty($_POST['id'])) {
                $procesaform = true;
                $data['id'] = $_POST['id'];
            }

            if ($procesaform) {
                $capital = new Capital();
                $capital->setWord($data['word']);
                $capital->setId($data['id']);
                $capital->editEntity();
                header("location:" . DIRBASEURL . "/");
            } else {
                $mensaje['error'] = "No se puede editar";
                $this->renderHTML("../app/view/editWord_view.php", $mensaje);
            }
        } else {
            $request = str_replace(DIRBASEURL, '', $_SERVER['REQUEST_URI']);
            $elementos = explode('/', $request);
            $data = array();
            $data['id'] = end($elementos);
            $this->renderHTML("../app/view/editWord_view.php", $data);
        }
    }

    public function deleteWord() {
        $request = str_replace(DIRBASEURL, '', $_SERVER['REQUEST_URI']);
        $elementos = explode('/', $request);
        $id = end($elementos);
        $capital = new Capital();
        $capital->deleteEntity($id);
        header("location:" . DIRBASEURL . "/");

    }

    public function searchWords() {
        if (isset($_POST['enviar'])) {
            $procesaForm = false;
            $data = array();

            if (!empty($_POST['word'])) {
                $procesaform = true;
                $data['word'] = $_POST['word'];
            }

            if ($procesaform) {
                $palabras = array(); 
                $capital = new Capital();
                $capital->setWord($data['word']);
                $palabras = $capital->getSearchWords($data['word']);
                $this->renderHTML("../app/view/busquedaWord_view.php", $palabras);
                
            } 
        }
    }
}



?>