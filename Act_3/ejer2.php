<?php  
    /**
     *  @author David Rosas
     *  Enunciado: Escribe un programa que genere e imprima un número aleatorio de 4 cifras, mostrando a
     *   continuación cada una de sus cifras en un color diferente.
     *   Por ejemplo:
     *   6792
     *   2
     *   9
     *   7
     *   6
     */

    $num = strval(random_int(0, 9999));

    echo "$num";
    
    $tamaño = strlen($num);

    $contador = 0;

    for ($i = 1; $i < $tamaño; $i++) {
        
        $cifra = intval(substr($num, $contador, $i));
        
        $contador++;

        echo "<br>" , "$cifra";
        
    }
?>