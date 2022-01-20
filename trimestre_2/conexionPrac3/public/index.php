<?php
require_once('..\app\Config\parametros.php');
require_once('..\vendor\autoload.php');

use App\Controllers\DefaultController;

$controller = new DefaultController;
// $controller->saludaAction();
// $controller->numerosAction();

$string = $_SERVER['REQUEST_URI'];
$array = explode('/', $string);
if ($array[7] == 'saludo') {
    $controller->saludaAction();
} else if ($array[7] == 'numeros') {
    $controller->numerosAction();
}
?>