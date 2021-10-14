<?php 

    /**
     *  @author David Rosas
     *  Enunciado: Modifica la página inicial realizada, incluyendo una imagen de cabecera en función de la estación del
     *   año en la que nos encontremos y un color de fondo en función de la hora del día.
     * 
     * 
     */

    $hora = intval(substr(date('H:i:s'), 0 , 2));
    $mes = intval(substr(date('Y-m-d'), 5 , 6));

    // Gestión del fondo según la hora.

    if (8 <= $hora && $hora < 14) { // Por la mañana
        echo '<body style="background-color:##A8D1F6;"></body>';
    } elseif (14 <= $hora && $hora < 21) { // Por la tarde 
        echo '<body style="background-color:##5DABF2;"></body>';
    }  elseif (21 <= $hora && $hora < 8) { // De madrugada
        echo '<body style="background-color:###278BE5;"></body>';
    }

    // Gestión de la foto según la época del año.

    if (12 == $mes && $mes < 3) { // invierno
        echo '<img src="img/invierno.jpg" width="400" height="500"></img>';
    } elseif (3 <= $mes && $mes < 6) { // primavera
        echo '<img src="img/primavera.jpg" width="400" height="500"></img>';
    } elseif (6 <= $mes && $mes < 9) { // verano 
        echo '<img src="img/verano.jpg" width="400" height="500"></img>';
    } else { // otoño
        echo '<img src="img/otoño.jpg" width="400" height="500"></img>';
    }



?>