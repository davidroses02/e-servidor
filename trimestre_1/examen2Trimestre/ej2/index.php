<?php 

/**
 * @author David Rosas
 */

    session_start();

    // Creamos las variables necesarias:
    $videojuegos = "";
    $literatura = "";
    $cine = "";
    $series = "";
    $usuario = "";
    $perfil = "";
    
    // Array de Usuarios
    $aUsuarios = array(
        array(  "usuario"=>"editor",
                "psw"=>"editor",
                "perfil"=>"editor"),

        array  ( "usuario"=>"redactor",
                "psw"=>"redactor",
                "perfil"=>"redactor"),
    );

    // Array de noticias 
    $noticias = array(
        "videojuegos"=>array("Videojuego1","Videojuego2","Videojuego3"),
        "Literatura"=>array("Literatura1","Literatura2"),
        "Cine"=>array("Cine1","Cine2","Cine3","Cine4"),
        "Series"=>array("Series1","Series2")
    );

    $_SESSION['noticias'] = $noticias;

    //login

    if (isset($_POST['enviarLogin'])) {
       foreach ($aUsuarios as $user) {
            if ($user['usuario'] == $_POST['usuario'] || $user['psw'] == $_POST['psw']) {
                $_SESSION['usuario'] = $_POST['usuario'];
                $_SESSION['psw'] = $_POST['psw'];
                $_SESSION['perfil'] = $user['perfil'];
           }
       }
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David Rosas</title>
</head>
<body>
    <?php 

    if ($_SESSION['perfil'] == 'editor') {
        echo "<h2>Te has logueado con:" . $_SESSION['perfil'] . "</h2>" . "<br>";
        echo "<a href=\"index.php\">Inicio</a> | ";
        echo "<a href=\"editor.php\">Nuevas Categorías</a> " . "<br>";
    }

    if ($_SESSION['perfil'] == 'redactor') {
        echo "<h2>Te has logueado con:" . $_SESSION['perfil'] . "</h2>" . "<br>";
        echo "<a href=\"index.php\">Inicio</a> | ";
        echo "<a href=\"redactor.php\">Crea Noticias</a> " . "<br>";
    }
    
    // FORMULARIO
    echo "<br>";
    echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\">";
        echo "<label for=\"usuario\">Usuario </label>";
        echo "<input type=\"text\" name=\"usuario\" placeholder=\"Usuario\"/><br>";
        echo "<label for=\"psw\">Contraseña </label>";
        echo "<input type=\"text\" name=\"psw\" placeholder=\"Contraseña\"/><br>";
        echo "<input type=\"submit\" name=\"enviarLogin\" value=\"Iniciar sesión\"/>";
    echo "</form>";
    

    
    
      
    ?>
</body>
</html>