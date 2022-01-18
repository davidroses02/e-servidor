
<?php 

include("constantes.php");
include("Usuarios.php");
session_start();


if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $nombre = "";
    $contrasena = "";
    
    $us = Usuarios::getInstancia();
    
    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
    }
    
    if (isset($_POST["contrasena"])) {
        $contrasena = $_POST["contrasena"];
    }
    
    $user = $us->login($nombre, $contrasena);

    foreach ($user as $key) {
        if ($key['nombre'] == $nombre && $key['contrasena'] == $contrasena) {
            $_SESSION['aut'] = $user;
            header("Location:buscar.php");
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
    <title>login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p> <label> nombre: <input type="text" name="nombre" value="nombre"></p>
    <p> <label> contrasena: <input type="text" name="contrasena" value="contrasena"> </p>
    <input type="submit" value="Entrar">
    </form>
</body>
</html>