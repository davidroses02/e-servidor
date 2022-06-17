<?php
namespace App\Controller;

use App\Models\Bookmarks;
use App\Models\Usuarios;


class IndexController extends BaseController {

    public function login() 
    {
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
            
            if ($error) {
                $this->renderHTML('../app/view/includes_invitado/login.php', $data);
            }

            if ($procesaFormulario) {
                $usuario = new Usuarios();
                $usuario->setUsuario($_POST['usuario']);
                $usuario->setPassword($_POST['password']);

                $data = $usuario->login();
                if ($data) {
                    if ($data['perfil'] === 'admin') {
                        $_SESSION['perfil'] = 'admin';
                        $_SESSION['id'] = $data['id'];
                        $_SESSION['data'] = $data;
                        $data['usuarios'] = $usuario->getAll();
                        $this->renderHTML('../app/view/includes_admin/index_admin.php', $data);

                    } elseif ($data['perfil'] === 'usuario') {
                        $_SESSION['perfil'] = 'usuario';
                        $_SESSION['id'] = $data['id'];
                        $_SESSION['data'] = $data;
                        $this->renderHTML('../app/view/includes_usuario/index_usuario.php', $data);

                    }
                }
            }

        } else {
            $this->renderHTML('../app/view/index_view.php');
        }
    }
}