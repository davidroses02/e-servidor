<?php
session_start();
if(!isset($_SESSION['agenda'])){
    $_SESSION['agenda'] = array();
    $_SESSION['visitas'] = 0;
}

$agenda = array();

if (isset($_POST['alta'])) {
    $_SESSION['agenda'][] = array(
        'nombre' => $_POST['nombre'],
        'telefono' => $_POST['telefono']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Agenda de contactos</h1>
    <a href="enviar_correo.php">Listado destinatarios</a>
    <form action="index.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono">
        <br>
        <input type="submit" name="alta" value="Alta">
    <h2>Seleccionar destinatarios</h2>
    <?php
        foreach ($_SESSION['agenda'] as $key => $value) {
            echo $value['nombre']. " " .$value['telefono']. "<br>";
        }
    ?>
</body>
</html>
