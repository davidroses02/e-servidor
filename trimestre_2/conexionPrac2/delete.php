<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Borrado de un registro</h1>
</body>
</html>

<?php 

include("constantes.php");
include("Superheroe.php");

$id = $_GET["id"];
$sh = Superheroe::getInstancia();
$sh->delete($id);

echo "<a href='buscar.php'>Volver</a>"

?>