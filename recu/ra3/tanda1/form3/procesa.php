<?php


$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$operaciones = $_POST;
var_dump($operaciones);

foreach ($operaciones as $key => $value) {
    switch ($key) {
        case 'sumar': 
            $resultado = $n1 + $n2;
            echo "$n1 $value $n2 = " . $resultado . "<br>";
            break;
        case 'restar':
            $resultado = $n1 - $n2;
            echo "$n1 $value $n2 = " . $resultado . "<br>";
        break;
        case 'mult':
            $resultado = $n1 * $n2;
            echo "$n1 $value $n2 = " . $resultado . "<br>";
        break;
        case 'dividir':
            $resultado = $n1 / $n2;
            echo "$n1 $value $n2 = " . $resultado . "<br>";
        break;
    }
    
}

?>