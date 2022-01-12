<?php 

/**
 * 
 * @autor David Rosas
 * 
 */

    $x = 0;
    $y = 10;
    echo "esta es x " . "$x"  . " ";
    echo "esta es y " ."$y";
    echo "<br>";

    function intercambia(&$pepe , &$juan) {
        $pepe = $juan;
        $juan = $pepe;
    }

    intercambia($x,$y);

    echo "esta es x " . "$x" . " ";
    echo "esta es y " . "$y";



?>