
<?php 

include("constantes.php");
include("Usuarios.php");

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $nombre = "";
    $contraseña = "";
    
    $us = Usuarios::getInstancia();
    
    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
    }
    
    if (isset($_POST["contraseña"])) {
        $contraseña = $_POST["contraseña"];
    }
    
    $user = $us->login($nombre, $contraseña);

    
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p> <label> nombre: <input type="text" name="nombre" value="nombre"></p><br>
    <p> <label> contraseña: <input type="text" name="contraseña" value="contraseña"> </p><br>
    <input type="submit" value="Entrar"><br>
    </form>
</body>
</html>