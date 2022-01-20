<?php

namespace App\Controllers;

class DefaultController extends BaseController
{

    public function saludaAction() {
        $data = array();
        $this->renderHTML('..\views\holamundo_view.php', $data);
    }
   
    // function showAction()
    // {
    //     $this->renderHTML('..\views\holamundo_view.php', $data);
    // }
}

?>