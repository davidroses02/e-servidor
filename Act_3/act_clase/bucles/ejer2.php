<?php  
    /**
     *  @author david Rosas
     *  Enunciado: Sumar los 3 primeros números pares.
     * 
     */

    $par = 0;
    $total = 0;

    for ($i = 0; $i < 3; $i++) {
        $par += 2;
        echo "$par" , "<br>";
        $total += $par;
    }
    echo "el total es: " , "$total";

?>