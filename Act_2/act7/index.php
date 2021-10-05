<?php

    /** Autor: David Rosas - 2º DAW 
     *  Enunciado:  Escribir un script que declare una variable y muestre la siguiente información en pantalla:
        Valor actual 8.
        Suma 2. Valor ahora 10.
        Resta 4. Valor ahora 6.
        Multipica por 5. Valor ahora 30.
        Divide por 3. Valor ahora 10.
        Incrementa el valor en 1. Valor ahora 11.
        Decrementa el valor en 1. Valor ahora 11.
     *  
    */

    $valor = 8;

    echo "Valor actual $valor" , "<br>";
    echo "Suma 2. Valor ahora " , $valor = "$valor" + 2 , "<br>";
    echo "Resta 4. Valor ahora " , $valor = "$valor" - 4 , "<br>";
    echo "Multipica por 5. Valor ahora " , $valor = "$valor" * 5 , "<br>";
    echo "Divide por 3. Valor ahora " , $valor = "$valor" / 3 , "<br>";
    echo "Incrementa el valor en 1. Valor ahora " , $valor = "$valor" + 1 , "<br>";
    echo "Decrementa el valor en 1. Valor ahora " , $valor = "$valor" - 1 , "<br>";
    

?>