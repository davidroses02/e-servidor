<?php 

    /** Autor: David Rosas - 2º DAW 
     *  Enunciado: Script que, a partir del radio almacenado en una variable y la definición de la constante PI, calcule el
        área del círculo y la longitud de la circunferencia. El debe mostrar valor de radio, longitud de la
        circunferencia, área del círculo y dibujará un círculo utilizando gráficos vectoriales.
     *  
    */

    const pi = 3.14;
    $radio = 45.0;
    $area = pi * pow("$radio", 2);
    $diametro = "$radio" * 2;

    echo "$area"; 

    echo '<svg width="100" height="100">
    <circle cx="50" cy="50" r="'.$radio.'" stroke="green" stroke-width="4" fill="yellow" />'

?>
