<?php

require_once('..\app\Config\constantes.php');
require_once('..\vendor\autoload.php');
use App\Core\Router;
use App\Controllers\IndexController;
use App\Controllers\SuperheroesController;

// $controller = new DefaultController;
// $controller->mostrarIndex();

$router = new Router();

// $router->add(array(
//     'name'=>'invitadoIndex', 
//     'path'=>'/^\/$/', 
//     'action'=>[SuperheroesController::class, 'IndexAction']));

$router->add(array(
    'name' => 'searchSuperheroes',
    'path' => '/^\/$/',
    'action' => [SuperheroesController::class, 'LastSuperheroesAction']));

// $router->add(array(
//     'name' => 'loginCiudadano',
//     'path' => '/^\/$/',
//     'action' => [AuthController::class, 'loginCiudadano']));
// $router->add(array(
//     'name'=>'add_superheroe', 
//     'path'=>'/^\/superheroes\/add$/', 
//     'action'=>[SuperheroeController::class, 'AddSuperheroeAction']));

// $router->add(array(
//     'name'=>'edit_superheroe',  
//     'path'=>'/^\/superheroes\/edit\/[0-9]{1,3}$/', 
//     'action'=>[SuperheroeController::class, 'EditSuperheroeAction']));

// $router->add(array(
//     'name'=>'delete_superheroe',  
//     'path'=>'/^\/superheroes\/del\/[0-9]{1,3}$/', 
//     'action'=>[SuperheroeController::class, 'DeleteSuperheroeAction']));

$request = str_replace(DIRBASEURL,'',$_SERVER['REQUEST_URI']);
$route = $router->match($request);
//var_dump($route);

if($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo "No route matched";
}