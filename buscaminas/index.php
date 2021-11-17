<?php 

/**
 * @autor David Rosas
 * 
 */

    define("N_FILA", 10);
    define("N_COLUMNA", 10);
    define("MINAS", 10);
    
    function tableroACero() {
        $tablero = array();
        for ($i=0; $i < N_FILA; $i++) { 
            for ($x=0; $x < N_COLUMNA; $x++) { 
                $tablero[$i][$x] = 0; 
                colocarMinas($tablero, $i, $x)
            }
        }
        return $tablero;
    }
    
    function colocarMinas($tablero, $i, $x) {
        $contador = 0;
        while ($contador < MINAS) {
            $fila_random = rand(0, N_FILA - 1 );
            $columna_random = rand(0, N_COLUMNA - 1);
            if ($tablero[$fila_random][$columna_random] != 9) {
                $tablero[$i][$x] = 9;
            } 
            $contador++;
        }
        return $tablero;
    }
    
    function visualizarTablero($arr) {
        foreach ($arr as $fila) {
            foreach ($fila as $columna) {
                echo $columna . " ";
            }
            echo "<br>";
        }
    }
    
    $tablero = tableroACero();
    $tableroConMinas = colocarMinas($tablero);
    visualizarTablero($tableroConMinas);
?>