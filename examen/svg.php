<?php


// Guillermo Tamajón Hernández

$control = false;

echo '<table border = "3">';
for ($i=0; $i < 10 ; $i++) { 
    echo  '<tr>';
    for ($j=0; $j < 10; $j++) { 
        echo '<td>';
        
        if ($control) {
            echo '<svg width="60" height="60">';
            echo '<rect width="60" height="60" style="black" />';
            echo '</svg>';
            $control = false;
        }
        else {
            echo '<svg width="60" height="60">';
            
            echo '</svg>';
            $control = true;
        }
        
        echo '</td>';
    }
    $control = !$control;
    echo '</tr>';
}
echo '</table>';


?>