<?php 

    /** Autor: David Rosas - 2º DAW 
     *  Enunciado:  A veces es necesario conocer exactamente el contenido de una variable. Piensa como puedes hacer
        esto y escribe un script con la siguiente salida:
        string(5) “Harry”
        Harry
        int(28)
        NULL
     *  
    */

    $string = "Harry";

    echo var_dump($string) , "<br>";
    echo "$string" , "<br>";

    $entero = 28;
    echo var_dump( $entero ) , "<br>";

    $vacia = NULL;
    echo var_dump($vacia);

?>