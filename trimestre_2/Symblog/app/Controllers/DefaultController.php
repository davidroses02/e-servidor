<?php
namespace App\Controllers;
use App\Models\Superheroe;
require_once('..\app\Config\constantes.php');
require_once('..\vendor\autoload.php');

class  DefaultController extends BaseController {

    public function saludaAction() {
        $data = array();
        $this->renderHTML('..\views\holamundo_view.php', $data);
    }
    
    public function numerosAction() {
        $data = array();
        $data = $this->diezPares();
        $this->renderHTML('..\views\numeros_view.php', $data);
    }

    private function diezPares() {
        $anumeros = array();
        for ($i=1; $i <= 10 ; $i++) { 
            $anumeros[] = 2 * $i;
        }
        return $anumeros;
    }
}