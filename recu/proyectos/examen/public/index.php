<?php 

require('../vendor/autoload.php');
require('../app/config/constantes.php');

use App\Controller\IndexController;
use App\Controller\ConsultaController;
use App\Controller\MedicoController;

use App\Core\Router;

session_start();
if (!isset($_SESSION['perfil'])) {
    $_SESSION['perfil'] = 'invitado';
    $_SESSION['usuario'] = "";
    // variables de sesion creadas por defecto.

}

$router = new Router();
$router->add(array(
    'name' => 'login',
    'path' => '/^\/||\/w+$/',
    'action' => [IndexController::class, 'login'],
    'auth' => ['invitado', 'medico', 'admin', 'paciente']
));
$router->add(array(
    'name' => 'crearConsulta',
    'path' => '/^\/medico\/crear_consulta$/',
    'action' => [ConsultaController::class, 'crearConsulta'],
    'auth' => ['medico']
));
$router->add(array(
    'name' => 'crearMedico',
    'path' => '/^\/admin\/crear_medico$/',
    'action' => [MedicoController::class, 'crearMedico'],
    'auth' => ['admin']
));

$request = str_replace(DIRBASEURL, '', $_SERVER['REQUEST_URI']);
$route = $router->match($request);
$bandera = false;
if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    foreach ($route['auth'] as $key) {
        if ($_SESSION['perfil'] === $key) {
            $bandera = true;
        }
    }
    if ($bandera) {
        $controller = new $controllerName;
        $controller->$actionName($request);
    } else {
        echo $_SESSION['perfil'];
        echo "No tienes permiso para acceder a esta pagina";
    }
} else {
    echo "No se encontro nada";
}

?>