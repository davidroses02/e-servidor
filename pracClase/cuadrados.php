<?php 

$array = array(2,4,6,8);

$alCuadrado = array_map( function ($doble) {
    return $doble * $doble;
}, $array);

print_r ($alCuadrado);


?>