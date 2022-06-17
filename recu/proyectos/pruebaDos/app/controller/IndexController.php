<?php
namespace App\Controller;

use App\Models\Capital;
use App\Models\Usuarios;


class IndexController extends BaseController {

    public function IndexAction() 
    {
        // inicializar las variables

        // Proceso de logueo.
        if (isset($_POST['login']) && !empty($_POST['usuario']) && !empty($_POST['password'])) { // cambiar esto
            $cuenta = new Usuarios();
            $cuenta->setUsuario($_POST['usuario']);
            $cuenta->setPassword($_POST['password']);

            $data = $cuenta->login();
            if ($data) {
                $_SESSION['usuario'] = $data['usuario'];
                $_SESSION['perfil'] = $data['perfil'];
                $_SESSION['fecha'] = $data['fecha'];
            } else {
                $_SESSION['mensaje'] = 'Usuario o contraseña incorrectos';
            }
        }

        // Últimas palabras y busqueda por filtro de palabras
        if (isset($_POST['enviar']) && !empty($_POST['palabra'])) {
            $capital = new Capital();
            $capital->setWord($_POST['palabra']);
            $data = $capital->getSearchWords();
            if ($_SESSION['perfil'] === 'admin') {
                $data['perfil'] = 'admin';
            }
            $this->renderHTML('../app/view/index_view.php', $data);
        } else {
            $capital = new Capital();
            $data = $capital->getLastWords();
            $this->renderHTML('../app/view/index_view.php', $data);
        }
    }
}