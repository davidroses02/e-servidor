<?php

require_once '../vendor/autoload.php';

use Dotenv\Dotenv;
use Aura\Router\RouterContainer;
use Laminas\Diactoros;
use Laminas\Diactoros\Response\RedirectResponse;
use Illuminate\Database\Capsule\Manager as Capsule;

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => "symbloglibrerias.local",
    'database' => "symblog",
    'username' => "root",
    'password' => "",
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
$request = \Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);




$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('home', '/', [
    'controller'=>'App\Controllers\IndexController',
    'action'=> 'indexAction'
]);

$map->get('about', '/about', [
    'controller'=>'App\Controllers\PageController',
    'action'=>'aboutAction'
]);

$map->get('contact', '/contact', [
    'controller'=>'App\Controllers\PageController',
    'action'=>'contactAction'
]);

$map->post('contactSend', '/contact', [
    'controller'=>'App\Controllers\PageController',
    'action'=>'contactActionSend'
]);

$map->get('blog', '/blog/{id}', [
    'controller'=>'App\Controllers\BlogsController',
    'action'=>'showBlogAction'
]);

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
if (!$route) {
    echo 'No route';
} else {
    //Aprovachmos la posibilidad que nos da php de crear clases con el nombre almacenado en una variable
    $handlerData = $route->handler;
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];

    // $needsAuth = $handlerData['auth'] ?? false;
    // $sessionUserId = $_SESSION['userId'] ?? null;
    // if ($needsAuth && !$sessionUserId) {
    //     header('Location: /login');

    // }
    // else {
        $controller = new $controllerName;
        $response = $controller->$actionName($request);
        foreach($response->getHeaders() as $name => $values) {
            foreach($values as $value) {
              header(sprintf('%s: %s', $name, $value), false);
              }
         }
         http_response_code($response->getStatusCode());
         echo $response->getBody();
    //}

foreach ($route->$atributes as $key => $val) {
    $request = $request->withAttribute($key, $val);
}
// }
}