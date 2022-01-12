<?php 

    include("conectaSuperheroes.php");
    $db = conectaDB();
    $id = $_GET['id'];
    $nombre = "";
    $capacidad = "";
    
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        var_dump($_POST);
        if (isset($_POST["nombre"])) {
            $nombre = $_POST["nombre"];
        }
        if (isset($_POST["capacidades"])) {
            $capacidad = $_POST["capacidades"];
        } 
        
        $idPOST = $_POST["id"];
        $sqlUpdate = "update superheroes set nombre=:nombre, capacidades=:capacidad where id=:id";
        $consulta = $db->prepare($sqlUpdate);
        $aParametros = array(
                                ":nombre"=>$nombre,
                                ":capacidad"=>$capacidad,
                                ":id"=>$idPOST,
                            );
        
        if ($consulta->execute($aParametros)) {
            echo "Registro actualizado." . "<br>";
        } else {
            echo "El registro no ha sido actualizado." . "<br>";
        }
    }
    
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


echo "<a href=".'index.php'.">Volver</a>";

?>