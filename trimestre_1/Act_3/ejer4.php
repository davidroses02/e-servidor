<?php

/**
 * @autor: David Rosas
 * Programa que lea un número entero N de 5 cifras y muestre sus cifras igual que en el ejemplo.
 * Ejemplo.
 */

$numero = 12345;

for ($i=-1; $i > (-strlen($numero)) ; $i--) { 
    echo (substr($numero, $i)).'<br>';
}
echo $numero;

?>