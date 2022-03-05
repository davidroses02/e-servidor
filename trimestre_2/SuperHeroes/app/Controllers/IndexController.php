<?php
namespace App\Controllers;

use App\Models\Superheroe;


class IndexController extends BaseController {
    public function IndexAction() {
        $data = array();
        $sh = Superheroe::getInstancia();
        $data = $sh->getLastSh();
        if (isset($_POST['buscar'])) {
            $data = $sh->getByNombre($_POST['nombre']);
            $this->renderHTML('..\views\index_view.php', $data);
        } else if (isset($_POST['añadir'])) {
            header('location: insertSH.php');
        } else {
            $data = $sh->getLastSh();
            $this->renderHTML('..\views\index_view.php', $data);
        }
    }
}