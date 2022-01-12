<?php 

/**
 * @autor David Rosas
 * 
 */

//función para crear tablero
function crearTablero($filas, $columnas) {
    $tablero = array();
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            $tablero[$i][$j] = 0;
        }
    }
    return $tablero;
}

function crearTableroConUnos($filas, $columnas) {
    $tablero = array();
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            $tablero[$i][$j] = 1;
        }
    }
    return $tablero;
}

//funcion para colocar minas generando numeros aleatorios 0 o solo 10 9  
function colocarMinas($filas, $columnas) {
    $tablero = crearTablero($filas, $columnas);
    $contador = 0;
    while ($contador < 10) {
        $fila = rand(0, $filas - 1);
        $columna = rand(0, $columnas - 1);
        if ($tablero[$fila][$columna] == 0) {
            $tablero[$fila][$columna] = 9;
            $contador++;
            // si hay un 9 en el tablero se suma 1 a las casillas adyacentes
            for ($i = $fila - 1; $i <= $fila + 1; $i++) {
                for ($j = $columna - 1; $j <= $columna + 1; $j++) {
                    if ($i >= 0 && $i < $filas && $j >= 0 && $j < $columnas) {
                        if ($tablero[$i][$j] != 9) {
                            $tablero[$i][$j]++;
                        }
                    }
                }
            }
        }
    }
    return $tablero;
}

function ganadora() {
    
    $visible = crearTableroConUnos(10,10);
    $count = 0;

    $visible[0][1]=0;
    $visible[0][2]=0;
    $visible[0][3]=0;
    $visible[0][4]=0;
    $visible[0][5]=0;
    $visible[0][6]=0;
    $visible[0][7]=0;
    $visible[0][8]=0;
    $visible[0][9]=0;
    $visible[1][1]=0;

    for ($i = 0; $i < count($visible); $i++) {
        for ($j = 0; $j < count($visible[$i]); $j++) {
            if ($visible[$i][$j] == 1) {
                $count++;
            }
        }
    }

    mostrarTablero($visible);
    
    echo $count;
    if ($count == (100 - 10)) {
        return "true";
    } else {
        return "false";
    }

}

//mostrar tablero
function mostrarTablero($tablero) {
    echo "<table border='1'>";
    for ($i = 0; $i < count($tablero); $i++) {
        echo "<tr>";
        for ($j = 0; $j < count($tablero[$i]); $j++) {
            echo "<td>" . $tablero[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

$tablero = colocarMinas(10, 10);


echo ganadora();
echo "<br>";
mostrarTablero($tablero);
?>