<?php  
    /**
     *  @author David Rosas
     *  Enunciado: Dado el mes y año almacenados en variables, escribir un programa que muestre el calendario mensual
     *   correspondiente. Marcar el día actual en verde y los festivos en rojo.
     * 
     * 
     */
    
    $mesActual = date("F");

    $fechaSistema = date('Y-m-d');

    $añoSistema = intval(substr($fechaSistema, 0 , 4));
    $diaSistema = intval(substr($fechaSistema, 8 , 9));

    $meses = array (
        "January" => 31,
        "February"  => diaFebrero($añoSistema),
        "March" => 31,
        "April" => 30,
        "May" => 31,
        "June" => 30,
        "July" => 31,
        "August" => 31, 
        "September" => 30,
        "October" => 31,
        "November" => 30,
        "December" => 31,
    );
    
    imprimirMes($mesActual);

    echo "<table>";
    for ($x = 1; $x <= $meses[$mesActual]; $x++) {
        if ($x == $diaSistema) {
            echo "<td>";
            echo "<p style=color:green;>$x</p>";
            echo "</td>";
        } else {
            if ($x == 7 || $x == 14 || $x == 21 || $x == 28) {
                echo "<td>";
                echo "<p style=color:red;>$x</p>";
                echo "</td>";
                echo "<tr>";
            } else {
                echo "<td>";
                echo "<p>$x</p>";
                echo "</td>"; 
            }
        }
    }
    
    echo "</table>";
    
    function imprimirMes ($mesActual) {
        echo "<tr><td>";
        echo "$mesActual";
        echo "</td></tr><br>";
    }

    function diaFebrero ($añoSistema) {
        if ( (($añoSistema % 4) == 0) || (($añoSistema % 100) == 0) && (($añoSistema % 400) == 0) ) {
            return 29;
        } else {
            return 28;
        }
    }

?>