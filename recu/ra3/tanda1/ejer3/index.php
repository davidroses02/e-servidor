<?php

/**
 * 
 * Script de operaciones matematicas
 */

function clearData($cadena){
    $cadena_limpia = trim($cadena);
    $cadena_limpia = htmlspecialchars($cadena_limpia);
    $cadena_limpia = stripslashes($cadena_limpia);
    return $cadena_limpia;
}




$n1 = rand (1,100);
$n2 = rand (1,100);
$arrayOperaciones = array(
    "+",
    "-",
    "*",
    "/");

$operacion = $arrayOperaciones[rand(0,3)];
$resultado = $msgError =$msgResultado = $style= $style2 = "";
switch ($operacion){
    case "+":
        $resultadoEsperado = $n1 + $n2;
        break;
    case "-":
        $resultadoEsperado = $n1 - $n2;
        break;
    case "*":
        $resultadoEsperado = $n1 * $n2;
        break;
    case "/":
        $resultadoEsperado = $n1 / $n2;
        break;
}
$ProcesaFormulario = false;

if (isset($_POST['crear'])){
    $resultado=clearData($_POST['resultado']);
    $ProcesaFormulario = true;
    $resultadoEsperadoAntiguo = $_POST['respuestaEsperada'];

    if (empty ($resultado)){
        $msgError= "Tienes que poner un numero";
        $style = "style = color:red";
        $ProcesaFormulario = false;
    } 

    else {

        if ($resultado == $resultadoEsperadoAntiguo){
            $msgResultado = "Correcto";
            $style2 = "style = color:green";
        }
        else {
            $msgResultado = "Incorrecto";
            $style2 = "style = color:red";
        }

        
        
    }

   
} 

 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
        

            echo '<form action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="post">';
            echo '<p>'.$n1.' '.$operacion.' '.$n2.' = <input type="number" name="resultado" value="'.$resultado.'"/> </p>';
            echo '<input type="hidden" name="respuestaEsperada" value="'.$resultadoEsperado.'">';
             echo '<input type="submit" value="send" name="crear">';

            echo '</form>';

            if (isset($_POST['crear'])){
                echo '<p '.$style.'>'.$msgError.'</p>';
            }

            if ($ProcesaFormulario){
                
                echo '<p '.$style2.'>'.$msgResultado.'</p>';
            } 

            

           
        ?>
</body>
</html>