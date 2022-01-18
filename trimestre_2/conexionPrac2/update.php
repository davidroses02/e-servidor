<?php 
$id = $_GET['id'];
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
        <h2>Escribe el nuevo nombre y la nueva capacidad: </h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Nombre: <input type="text" name="nombre"><br/>
            Capacidades: <input type="text" name="capacidades"><br/>
            <?php 
            	echo "<input type='hidden' name='id' id='id' value='$id'>";
            ?>
            <input type="submit" name="submit" value="Submit"><br/><br/>
        </form>
    </body>
</html>

<?php 

include("constantes.php");
include("Superheroe.php");


if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $sh = Superheroe::getInstancia();

    if (isset($_POST["nombre"])) {
        $sh->setNombre($_POST["nombre"]);
    }
    
    if (isset($_POST["capacidades"])) {
        $sh->setCapacidades($_POST["capacidades"]);
    }

    if (isset($_POST["id"])) {
        $sh->setId($_POST["id"]);
    }

    $sh->edit();
    
}

echo "<a href='buscar.php'>Volver</a>"

?>