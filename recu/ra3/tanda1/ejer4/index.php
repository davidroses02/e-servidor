<?php

/**
 * 
 * Script que crea una encuesta
 */

function clearData($cadena){
    $cadena_limpia = trim($cadena);
    $cadena_limpia = htmlspecialchars($cadena_limpia);
    $cadena_limpia = stripslashes($cadena_limpia);
    return $cadena_limpia;
}

$mayorItem = "";
$ProcesaFormulario = false;

if (isset($_POST['enviar'])){
    $ProcesaFormulario = true;

    for ($i=1; $i<=5; $i++){
        $item = "item".$i;
        $item = clearData($_POST[$item]);
        if (empty($item)){
            $ProcesaFormulario = false;
            break;
        }
        else if ($i==1){
            $mayorItem = $item;
        }
        else if ($item > $mayorItem){
            $mayorItem = $item;
        }
    }
   
} 

 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
</head>
<body>

<!-- formulario radio botton 10 items -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>
        <legend>Encuesta</legend>
        <?php
            for ($i=1; $i<=10; $i++){
                echo '<label for="item'.$i.'">Item '.$i.'</label><br/>';
                echo '<input type="radio" name="item'.$i.'" value="1">1<br>';
                echo '<input type="radio" name="item'.$i.'" value="2">2<br>';
                echo '<input type="radio" name="item'.$i.'" value="3">3<br>';
                echo '<input type="radio" name="item'.$i.'" value="4">4<br>';
                echo '<input type="radio" name="item'.$i.'" value="5">5<br>';
                
            }
        ?>
        <input type="submit" value="Enviar" name="enviar">
    </fieldset>
</form>


<?php
        if ($ProcesaFormulario){
            echo "<p>El item con mayor valor es: $mayorItem</p>";
        } 
        elseif (isset($_POST['enviar'])){
            echo '<p style="color:red">No has respondido todas las encuestas</p>';
        }
        ?>
</body>
</html>