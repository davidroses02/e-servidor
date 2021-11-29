<?php

require_once 'vendor/autoload.php';

use App\models\Perro;
use App\models\Persona;

$perro = new Perro("Firulais", "negro");
echo "Dame la pata";

$perro -> darPata();
$perro -> entrenar();
$perro -> entrenar();
$perro -> entrenar();
$perro -> entrenar();
$perro -> entrenar();
$perro -> darPata();

?>