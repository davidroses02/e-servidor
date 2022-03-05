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
        <label>Buscar superheroe: <input type="text" name="nombre"></label>
        <br>
        <input type="submit" value="buscarNombre" name="buscar">
        <br>
        <input type="submit" value="añadir" name="añadir">
    </form>

    <?php
    foreach ($data as $value) {
        echo $value["nombre"] . " <a href='deleteSH.php?id=" . $value["id"] . "'>Del</a> <a href='updateSH.php?id=" . $value["id"] . "&nombre=" . $value["nombre"] . "'>Edit</a> </br>";
    }
    ?>

</body>

</html>