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

    $diaInicialMes = date('w',mktime(0,0,0,10,1,$añoSistema));
    $diaInicialMes = ($diaInicialMes > 0) ? $diaInicialMes-1 : $diaInicialMes;

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
                "intervalo" => array("1","6"),
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
    
    formulario($meses);
    echo "<br>";
    imprimirMes($mesActual);

    $primerDomingo = 7 - $diaInicialMes; 

    echo "<table>";
    
    for ($i=0; $i < $primerDomingo; $i++) { 
        echo "<td>";
        echo "<div>";
        echo "<p> </p>";
        echo "</div>";
        echo "</td>";
    }
    
    for ($x = 0; $x <= $meses[$mesActual]; $x++) {

        if ($x == $diaSistema) {
            
            echo "<td>";
            echo "<div>";
            echo "<p style=color:green;>$x</p>";
            echo "</div>";
            echo "</td>";
            //echo "<tr>";
            
        } else {
            if ($x == $primerDomingo) {
                
                echo "<td>";
                echo "<div>";
                echo "<p style=color:red;>$x</p>";
                echo "</div>";
                echo "</td>";
                echo "<tr>";
                $primerDomingo+=7;

            } else {
                
                echo "<td>";
                echo "<p>";
                
                if (festivos($x, $diasFestivos, $mesActual)[0] == $x) {
                    $diaFestivo = festivos($x, $diasFestivos, $mesActual)[0];
                    $color = festivos($x, $diasFestivos, $mesActual)[1];
                    $diaLeyenda = festivos($x, $diasFestivos, $mesActual)[2];
                    $mesLeyenda = festivos($x, $diasFestivos, $mesActual)[3];
                    $motivoLeyenda = festivos($x, $diasFestivos, $mesActual)[4];
                    echo "<div style=color:$color;><p>$diaFestivo</p></div>";
                } else {
                    //echo "<a href="sel_fecha.php?dia=$x&mes=$mesActual&año=$añoSistema ">$x";
                    echo "$x";
                }
                
                echo "</p>";
                echo "</td>"; 

            }
        }
        
    }
    echo "</table>";

    imprimirLeyendaDeFestivos($color, $diaLeyenda, $mesLeyenda, $motivoLeyenda);

    imprimirLeyenda();
    
    function festivos ($dia, $mes, $mesActual) {
        foreach ($mes as $key => $value) {
            //echo "$key"; -> imprime locales, provincial, nacional
            if ($key == "locales") { // color azul 
                foreach ($value as $x) {
                    //echo $x["dia"]; -> imprime solo dias 
                    if ($x["mes"] == $mesActual) {

                        if ($x["dia"] == $dia) {
                            return array($dia, "blue", $x["dia"], $x["mes"], $x["motivo"]);

                        }
                        
                    }
                }
            }

            if ($key == "provincial") { // color verde 
                foreach ($value as $x) {
                    //echo $x["dia"]; -> imprime solo dias 
                    if ($x["mes"] == $mesActual) {
                        if ($x["dia"] == $dia) {
                            return array($dia, "green", $x["dia"], $x["mes"], $x["motivo"]);
                        }
                    }
                }
            }

            if ($key == "nacional") { // color naranja 
                foreach ($value as $x) {
                    //echo $x["dia"]; -> imprime solo dias 
                    if ($x["mes"] == $mesActual) {
                        if ($x["dia"] == $dia) {
                            return array($dia, "orange", $x["dia"], $x["mes"], $x["motivo"]);
                        }
                    }
                }
            }

        }
    }

    function enlaceDias($i) {

    }
    
    function formulario($meses) {
        echo '<form method="post" action="ejer5.php">';
        echo "Mes: ";
        echo '<select> name="meses"';
        foreach ($meses as $key => $value) {
            echo "<option>$key</option>";
        }
        echo "</select>";
        echo "  Años: ";
        echo ' <select name="Meses"> 
            <option value="1">2021</option> 
            <option value="2">2020</option> 
            <option value="3">2019</option>
            <option value="4">2018</option> 
            <option value="5">2017</option> 
            <option value="6">2016</option>
            <option value="7">2015</option> 
            <option value="8">2014</option> 
            <option value="9">2013</option>
            <option value="10">2012</option> 
            <option value="11">2011</option> 
            <option value="12">2010</option>
        </select>';
        echo '  <input type="submit" name="submit" value="Submit"><br/>';
        echo "</form>";
        //echo $_POST[0];
    }

    function imprimirMes ($mesActual) {
        echo "<tr><td>";
        echo "$mesActual";
        echo "</td></tr><br>";
    }
    
    function imprimirLeyendaDeFestivos($color, $diaLeyenda, $mesLeyenda, $motivoLeyenda) {
        echo "<br><div style=color:$color; > $diaLeyenda "."  de  "." $mesLeyenda "."  -  "." $motivoLeyenda</div>";

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