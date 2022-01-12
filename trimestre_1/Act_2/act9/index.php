<?php 

    /** Autor: David Rosas - 2º DAW 
     *  Enunciado:  Escribir un script que utilizando variables permita obtener el siguiente resultado:
        Valor es string.
        Valor es double.
        Valor es boolean.
        Valor es integer.
        Valor is NULL.
     *  
    */

    $string = 'hola';
    echo "valor es " , gettype($string) , "<br>";

    $double = 3.14;
    echo "valor es " , gettype($double) , "<br>";

    $boolean = true;
    echo "valor es " , gettype($boolean) , "<br>";

    $integer = 5;
    echo "valor es " , gettype($integer) , "<br>";

    $null = null;
    echo "valor es " , gettype($null);
    

    

?>