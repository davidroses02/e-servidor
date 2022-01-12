<?php
session_start();

if(!isset($_SESSION['agenda'])){
    header("Location: index.php");
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
    <a href="enviar_correo.php">Enviar correo</a>
    <a href="cierra_sesion.php">cerrar sesión</a>

    <h2>Seleccionar destinatarios</h2>
    <?php

        foreach ($_SESSION['agenda'] as $key => $value) {
            echo $value['nombre']. " " .$value['telefono']. "<br>";
        }
    ?>
</body>
</html>
