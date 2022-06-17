<?php 

require('../vendor/autoload.php');
require('../app/config/constantes.php');

use App\Controller\DefaultController;
use App\Controller\IndexController;
use App\Controller\WordController;
use App\Core\Router;

session_start();
if (isset($_SESSION['perfil'])) {
    $_SESSION['perfil'] = 'invitado';
}

$router = new Router();
$router->add(array(
    'name' => 'searchWords',
    'path' => '/^\/||\/w+$/',
    'action' => [IndexController::class, 'IndexAction'],
    'auth' => ['invitado', 'admin']
));
// $router->add(array(
//     'name' => 'home',
//     'path' => '/^\/word\/?s=[A-Z][a-z]$/',
//     'action' => [IndexController::class, 'IndexAction']
// ));
$router->add(array(
    'name' => 'addWord',
    'path' => '/^\/word\/add$/',
    'action' => [WordController::class, 'addWord'],
    'auth' => ['admin']
));
$router->add(array(
    'name' => 'editWord',
    'path' => '/^\/word\/edit\/([0-9]+)$/',
    'action' => [WordController::class, 'editWord'],
    'auth' => ['admin']
));
$router->add(array(
    'name' => 'deleteWord',
    'path' => '/^\/word\/delete\/([0-9]+)$/',
    'action' => [WordController::class, 'deleteWord'],
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
    }
} else {
    echo 'No route found';
}

?>