<?php

$n1 = 0;
$n2 = 0;
$procesaFormulario = false;

if (isset($_POST["enviar"])) {
    $procesaFormulario = true;
    $msgError = "";

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    if (empty($n1)) {
        $procesaFormulario = false;
        $msgError = "Número requerido";
    }

    if (empty($n2)) {
        $procesaFormulario = false;
        $msgError = "Número requerido";
    }

} else {
    $procesaFormulario = false;
}


if (!$procesaFormulario) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="" method="post">
            <label>Número 1:</label><input type="number" name="n1" value="<?php $n1 ?>"> <?php echo $msgError ?><br>
            <label>Número 2:</label><input type="number" name="n2" value="<?php $n2 ?>"> <?php echo $msgError ?><br>

            suma <input type="radio" name="operaciones" value="+"><br>
            resta <input type="radio" name="operaciones" value="-"><br>
            mult <input type="radio" name="operaciones" value="*"><br>
            dividir <input type="radio" name="operaciones" value="/"><br>

            <input type="submit" name="enviar">
        </form>
    </body>

    </html>

<?php

} else {
    $operaciones = $_POST["operaciones"];

    switch ($operaciones) {
        case '+':
            $resultado = $n1 + $n2;
            break;
        case '-':
            $resultado = $n1 - $n2;
            break;
        case '*':
            $resultado = $n1 * $n2;
            break;
        case '/':
            $resultado = $n1 / $n2;
            break;
    }
    echo "$n1 $operaciones $n2 = " . $resultado;
}
?>