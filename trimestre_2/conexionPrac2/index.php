<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aplicación CRUD 2.0</h1>
    <a href="registrar.php">Registrar un superheroe</a><br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Buscador: <input type="text" name="nombre">
        <input type="submit" name="submit" value="Submit"><br/>
    </form>
    <h2>Listado de superheroes disponibles.</h2>
</body>
</html>

<?php 

include("constantes.php");
include("Superheroe.php");


if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
    }
    
    $campoBusqueda = "%" . "$nombre" . "%";

    $sh = Superheroe::getInstancia();
    $array = $sh->getByFilter($campoBusqueda);
    
    foreach ($array as $valor) {
        if (isset($array)) {
            $id = $valor["nombre"];
            echo "El nombre es: " . $valor["nombre"]. " " . "|" . " <a href='delete.php?id=$id'>delete</a>" . " | " . "<a href='update.php?id=$id'>update</a>" ."<br>";
        } else {
            echo "No hay campos";
        }
    }
}

?>
