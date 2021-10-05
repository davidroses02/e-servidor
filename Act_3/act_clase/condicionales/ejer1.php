<?php  
    /**
     * Autor: David Rosas
     *  Enunciado: Almacena tres números en variables y escribirlos en pantalla de forma ordenada.
     * 
     * 
     */

    
    $num1 = 22;
    $num2 = 12;
    $num3 = 10;

    if ($num1 > $num2 && $num1 > $num3) {
        echo " El primer número es: " . "$num1";
        if ($num2 > $num3) {
            echo " El segundo número es: " . "$num2";
        } if ($num3 < $num2) {
            echo " El tercer número es: " . "$num3";
        }
    }

    elseif ($num2 > $num3 && $num1 < $num2) {
        echo " El primer número es: " . "$num2";
        if ($num2 > $num3) {
            echo " El segundo número es: " . "$num3";
        } if ($num3 < $num2) {
            echo " El tercer número es: " . "$num1";
        }
    }

    elseif ($num3 > $num1 && $num1 > $num2) {
        echo " El primer número es: " . "$num3";
        if ($num3 > $num1) {
            echo " El segundo número es: " . "$num1";
        } if ($num1 > $num2) {
            echo " El tercer número es: " . "$num2";
        }
    }
    
    

?>