<?php 

/**
 * @author David Rosas
 */

    // Creamos las variables necesarias:
    $videojuegos = "";
    $literatura = "";
    $cine = "";
    $series = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['videojuegos'])) {
            setcookie('videojuegos', true, time()+36000 );
        } 
        if (isset($_POST['Literatura'])) {
            setcookie('Literatura', true, time()+36000 );
        }
        if (isset($_POST['Cine'])) {
            setcookie('Cine', true, time()+36000 );
        }
        if (isset($_POST['Series'])) {
            setcookie('Series', true, time()+36000 );
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
    
        // Titulo de la web
        echo "<h2>Gestión de preferencias</h2>";

        // Se imprimen los enlaces
        echo "<a href=\"settings.php\">Preferencias</a> | ";
        echo "<a href=\"index.php\">Salir</a> | " . "<br>";

        // Formulario de checkboxs
        echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\">";
            echo "<label for=\"videojuegos\">Videojuegos </label>";
            echo "<input type=\"checkbox\" name=\"videojuegos\">";
            echo "<label for=\"Literatura\">Literatura </label>";
            echo "<input type=\"checkbox\" name=\"Literatura\">";
            echo "<label for=\"Cine\">cine </label>";
            echo "<input type=\"checkbox\" name=\"Cine\" >";
            echo "<label for=\"Series\">Series </label>";
            echo "<input type=\"checkbox\" name=\"Series\" >";
            echo "<input type=\"submit\" name=\"save\" value=\"Save\"/>";
        echo "</form>";

    ?>

</body>
</html>