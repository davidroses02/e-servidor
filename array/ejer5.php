<?php 

    /**
     * @autor David Rosas
     * 
     *  Mejora calendario con un array de los días festivos: colores diferentes, nacionales, comunidad, locales.
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

    $diasFestivos = array(
        "locales" => array( 
            array(
                "dia" => "10",
                "mes" => "September",
                "motivo" => "Dia de la Virgen del Valle"
            ),
            array(
                "dia" => "15",
                "mes" => "May",
                "motivo" => "San Isidro"
            )
        ),
        "provincial" => array( 
            array(
                "dia" => "8",
                "mes" => "September",
                "motivo" => "Fuensanta"
            ),
            array(
                "intervalo" => array("3","6"),
                "mes" => "May",
                "motivo" => "Los Patios"
            ),
            array(
                "intervalo" => array("25","31"),
                "mes" => "May",
                "motivo" => "Feria de Córdoba"
            ),
            array(
                "dia" => "28",
                "mes" => "February",
                "motivo" => "Feria de Córdoba"
            )
        ),
        "nacional" => array(
            array(
                "dia" => "15",
                "mes" => "August",
                "motivo" => "Asunción de la Virgen"
            ),
            array(
                "intervalo" => array("25","31"),
                "mes" => "December",
                "motivo" => "Navidad"
            ),
            array(
                "dia" => array("1","6"),
                "mes" => "January",
                "motivo" => "Navidad"
            ),
            array(
                "dia" => "12",
                "mes" => "October",
                "motivo" => "Dia de la Hispanidad"
            ),
            array(
                "dia" => "1",
                "mes" => "November",
                "motivo" => "Dia de todos los Santos"
            )
        )
    );
    
    imprimirMes($mesActual);

    echo "<table>";
    for ($x = 1; $x <= $meses[$mesActual]; $x++) {
        
        
        if ($x == $diaSistema) {
            
            echo "<td>";
            echo "<div>"; //style=color:red;
            echo "<p style=color:green;>$x</p>";
            echo "</div>";
            echo "</td>";
            echo "<tr>";
            
        } else {
            if ($x == 7 || $x == 14 || $x == 21 || $x == 28) {
                
                echo "<td>";
                echo "<div>";
                echo "<p style=color:red;>$x</p>";
                echo "</div>";
                echo "</td>";
                echo "<tr>";
                
            } else {
                
                echo "<td>";
                echo "<p>";
                // if - else
                echo festivos($x, $diasFestivos, $mesActual) ;
                echo "$x";
                echo "</p>";
                echo "</td>"; 

            }
        }
    }
    echo "</table>";

    imprimirLeyenda();
    
    function festivos ($dia, $mes, $mesActual) {
        foreach ($mes as $key => $value) {
            //echo "$key"; -> imprime locales, provincial, nacional
            if ($key == "locales") { // color azul 
                foreach ($value as $x) {
                    //echo $x["dia"]; -> imprime solo dias 
                    if ($x["mes"] == $mesActual) {

                    }
                }
            }

            if ($key == "provincial") { // color verde 
                foreach ($value as $x) {
                    //echo $x["dia"]; -> imprime solo dias 
                    if ($x["mes"] == $mesActual) {

                    }
                }
            }

            if ($key == "nacional") { // color naranja 
                foreach ($value as $x) {
                    //echo $x["dia"]; -> imprime solo dias 
                    if ($x["mes"] == $mesActual) {
                        if ($x["dia"] == $dia) {
                            echo "<div style=color:orange;><p>$dia</p></div>";
                        }
                    }
                }
            }

        }
    }

    function imprimirMes ($mesActual) {
        echo "<tr><td>";
        echo "$mesActual";
        echo "</td></tr><br>";
    }
    
    function imprimirLeyenda () {
        echo "<br><div style=color:blue; >Festivo a nivel local</div>";
        echo "<div style=color:green; >Festivo a nivel provincial</div>";
        echo "<div style=color:orange; >Festivo a nivel nacional</div>";
    }

    function diaFebrero ($añoSistema) {
        if ( (($añoSistema % 4) == 0) || (($añoSistema % 100) == 0) && (($añoSistema % 400) == 0) ) {
            return 29;
        } else {
            return 28;
        }
    }

?>