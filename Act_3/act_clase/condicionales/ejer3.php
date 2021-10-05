<?php 

/**
     *  autor: David Rosas
     *  Enunciado: Carga fecha de nacimiento en variables y calcula la edad.
     * 
     * 
     */

    $fecha1 = "01/1/2000";
    $fecha2 = "01/1/2020";

    $resultado = intval(substr($fecha1, 5 , 9)) - intval(substr($fecha2, 5 , 9));
    echo "La persona tiene " , abs($resultado);

?>