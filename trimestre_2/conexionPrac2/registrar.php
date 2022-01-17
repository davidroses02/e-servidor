
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Añade tu superheroe:</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nombre: <input type="text" name="nombre"><br/><br/>
        Capacidades: <input type="text" name="capacidades"><br/><br/>
        <input type="submit" name="submit" value="Submit"><br/><br/>
    </form>
</body>
</html>

<?php

    include("constantes.php");
    include("Superheroe.php");

    $sh = Superheroe::getInstancia();
    
    if ($_SERVER["REQUEST_METHOD"]=="POST"){

        if (isset($_POST["nombre"])) {
            $sh->setNombre($_POST["nombre"]);
        }

        if (isset($_POST["capacidades"])) {
            $sh->setCapacidades($_POST["capacidades"]);
        }
        
        $sh->set();
        
    }

    echo "<a href=".'index.php'.">Volver</a>";
    
?>