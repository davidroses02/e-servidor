<?php 

require_once("..\Models\Palabra.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test?</title>
</head>
<body>
    <h1>Pequeño Crud de Palabra</h1>

    <h2> -- INSERTAR DATOS -- </h2>
    <?php 
    $palabra = Palabra::getInstancia();
    $palabra->setPalabra("Córdoba");
    $resultado = $palabra->set();
    if (!$resultado) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos";
    }
    //echo $resultado;
    ?>

    <h2> -- LEER DATOS -- </h2>
    <?php
    $ultimoId = $palabra->lastInsert();
    $datos = $palabra->get($ultimoId);
    // recorrer los datos
    foreach ($datos as $fila) {
        echo $fila['id'] . " - " . $fila['palabra'] . "<br>";
    }
    ?>

    <h2> -- ACTUALIZAR DATOS -- </h2>
    <?php
    $palabra->setId($ultimoId);
    $palabra->setPalabra("Málaga");
    $resultado = $palabra->edit();
    if (!$resultado) {
        echo "Datos actualizados correctamente";
    } else {
        echo "Error al actualizar datos";
    }
    ?>

    <h2> -- ELIMINAR DATOS -- </h2>
    <?php
    $resultado = $palabra->delete("2");
    echo $resultado;
    ?>
    

</body>
</html>