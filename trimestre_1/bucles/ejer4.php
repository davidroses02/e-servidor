<?php  
    /**
     *  @author David Rosas
     *  Enunciado: Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor hexadecimal que le
     *   corresponde. Cada celda será un enlace a una página que mostrará un fondo de pantalla con el color
     *   seleccionado. ¿Puedes hacerlo con los conocimientos que tienes?
     * 
     * 
     */

    echo "<html><head></head><body><table border='1'>";

    for ($i=0; $i < 255; $i+=32) { 
        echo "<tr>";
        for ($x=0; $x < 255; $x+=32) { 
            for ($z=0; $z < 255; $z+=32) { 
                echo "<td bgcolor='#".dechex($i).dechex($x).dechex($z)."'><a href='ej4.php?color="
                .dechex($i).dechex($x).dechex($z)."'>".dechex($i).dechex($x).dechex($z)."</a></td>";
                
            }
        }
        echo "</tr>";
    }

?>