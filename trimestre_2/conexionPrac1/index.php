<?php 

    include("conectaSuperheroes.php");
    $db = conectaDB();
    
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (isset($_POST["nombre"])) {
            $nombre = $_POST["nombre"];
        }
        
        $sql2 = "select * from superheroes where nombre like :patronbusqueda";
        $consulta = $db->prepare($sql2);
        $campoBusqueda = "%" . "$nombre" . "%";
        $aParametros = array(
            ":patronbusqueda"=>$campoBusqueda
        );
        $consulta->execute($aParametros);
        
        $resultado = $consulta->fetchAll();    
        foreach ($resultado as $valor) {
            if (isset($resultado)) {
                $id = $valor["nombre"];
                echo "El nombre es: " . $valor["nombre"]. " " . "|" . " <a href='delete.php?id=$id'>delete</a>" . " | " . "<a href='update.php?id=$id'>update</a>" ."<br>";
            } else {
                echo "No hay campos";
            }
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
    <h1>Aplicación CRUD</h1>
    <a href="registrar.php">Registrar un superheroe</a><br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Buscador: <input type="text" name="nombre">
        <input type="submit" name="submit" value="Submit"><br/>
    </form>
    <h2>Listado de superheroes disponibles.</h2>
</body>
</html>

<?php 


?>