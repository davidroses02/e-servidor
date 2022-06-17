<?php

$operaciones = $_POST;
//var_dump($operaciones);
$resultado = 0;
for ($i= $_POST["numeros"]; $i > 1; $i--) { 
    echo "$i" . " + <br>"; 
    $resultado += $i;
}
echo "El resultado es: " . "$resultado";

?>