<?php

require_once('..\app\Config\constantes.php');
require_once('..\vendor\autoload.php');
use App\Models\Superheroe;

//Sin objetos

// $datos = array (
//     "id"=>32
// );

// $sh = Superheroe::getInstancia();
// $sh->get($datos);


// Con objetos

// Añadir personaje y asignarle id despues de crearlo
// $sh = new Superheroe();
// $sh->setNombre("batman");
// $sh->setVelocidad(32);
// $sh->setEntity();
// $sh->setId($sh->lastInsert());
// echo $sh->getId();

$sh = Superheroe::getInstancia();
$resultado = $sh->getLastSh();
var_dump($resultado);
echo "<br>";
$resultado = $sh->getLastSh(7);
var_dump($resultado);