<?php 

$divisor = 0;
$n = 100;

try {
    echo $n%$divisor;
} catch (Error $e) { // en lugar de error también se puede utilizar ArithmeticError
    echo $e->getMessage();
    die();
}

?>