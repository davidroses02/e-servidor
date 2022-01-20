<?php

namespace App\Controllers;

class DefaultController extends BaseController
{
    public function saludaAction() {
        $data = array();
        $this->renderHTML('..\views\holamundo_view.php', $data);
    }

    // listar los 10 primeros numeros pares
    private function diezPares(){
        $pares = array();
        for ($i=0; $i < 10; $i++) { 
            $pares[$i] = $i*2;
        }
        return $pares;
    }

    public function numerosAction() {
        $data = array();
        $data = $this->diezPares();
        $this->renderHTML('..\views\numeros_view.php', $data);
    }
}

?>