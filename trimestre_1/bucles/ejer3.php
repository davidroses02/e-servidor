<?php  
    /**
     *  @author David Rosas
     *  Enunciado: Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas
     * 
     * 
     */

    echo "<html><head></head><body><table border='1'>";
    echo "<tr>";

    for($i=1;$i<=10;$i++){
        echo "<td bgcolor='blue'>Tabla del $i</td>";
    }

    echo "</tr>";

    for ($i=1;$i<=10;$i++) {
        echo "<tr>";
        for ($j=1;$j<=10;$j++) {
            echo "<td bgcolor='yellow'>".$i*$j."</td>";
        }

    echo "</tr>";
    
    }
 
?>