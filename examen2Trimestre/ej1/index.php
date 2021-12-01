<?php 

/**
 * @author David Rosas
 */

    // Creamos las variables necesarias:
    $videojuegos = "";
    $literatura = "";
    $cine = "";
    $series = "";

    $noticias = array(
        "videojuegos"=>array("Videojuego1","Videojuego2","Videojuego3"),
        "Literatura"=>array("Literatura1","Literatura2"),
        "Cine"=>array("Cine1","Cine2","Cine3","Cine4"),
        "Series"=>array("Series1","Series2")
    );

    $arrayVideojuegos = false;
    $arrayLiteratura = false;
    $arrayCine = false;
    $arraySeries = false;

    if (isset($_COOKIE['videojuegos'])) {
        $arrayVideojuegos = true;

    } 
    if (isset($_COOKIE['Literatura'])) {
        $arrayLiteratura = true;

    } 
    if (isset($_COOKIE['Cine'])) {
        $arrayCine = true;

    } 
    
    if (isset($_COOKIE['Series'])) {
        $arraySeries = true;

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
    
    // Titulo de la web
    echo "<h2>Gestión de preferencias</h2>";

    // Se imprimen los enlaces
    echo "<a href=\"index.php\">Inicio</a> | ";
    echo "<a href=\"settings.php\">Settings</a> " . "<br>";
    
    // Se imprimen los arrays con las preferencias 
    if ($arrayVideojuegos) {
        echo "<p>Videojuegos tiene estas preferencias: </p>";
        foreach ($noticias as $key => $value) {
            if ($key == "videojuegos") {
                foreach ($value as $index) {
                    echo " $index";
                }
                
            }
        }
        setcookie('videojuegos','',time()-100);
    }
    if ($arrayLiteratura) {
        echo "<p>Literatura tiene estas preferencias: </p>";
        foreach ($noticias as $key => $value) {
            if ($key == "Literatura") {
                foreach ($value as $index) {
                    echo " $index";
                }
                
            }
        }
        setcookie('literatura','',time()-100);
    }
    if ($arrayCine) {
        echo "<p>Cine tiene estas preferencias: </p>";
        foreach ($noticias as $key => $value) {
            if ($key == "Cine") {
                foreach ($value as $index) {
                    echo " $index";
                }
                
            }
        }
        setcookie('Cine','',time()-100);

    }
    if ($arraySeries) {
        echo "<p>Series tiene estas preferencias: </p>";
        foreach ($noticias as $key => $value) {
            if ($key == "Series") {
                foreach ($value as $index) {
                    echo " $index";
                }
                
            }
        }
        setcookie('Series','',time()-100);

    }
    
    ?>
</body>
</html>