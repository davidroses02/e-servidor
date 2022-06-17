<?php

$procesaformulario = false;

if (isset($_POST['comprobar'])) {
    $procesaformulario = true;
    $cont1 = $_POST['cont1'];
    $cont2 = $_POST['cont2'];
    $resultado = strcasecmp($cont1, $cont2);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contraseñas</title>
</head>

<body>
    <form action="" method="POST">
        Escribe la contraseña: <input type="password" name="cont1">
        Repite de nuevo la contraseña: <input type="password" name="cont2">
        <input type="submit" name="comprobar" value="comprobar">
    </form>
</body>

</html>

<?php

if ($procesaformulario) {
    if ($resultado == 0) {
        echo "Las cadenas son iguales.";
    } else {
        echo "Las cadenas NO son iguales.";
    }
}

?>