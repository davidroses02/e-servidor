<?php 

/**
 * @author David Rosas
 */

    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David Rosas</title>
</head>
<body>
    <?php 
    
        echo "<h2>Inserta nuevas noticias</h2>";
        echo "<br>";
        echo "<p>Elige categoría: </p>";
        echo "<select name=\"noticiasSelect\">";
        foreach ($_SESSION['noticias'] as $noticia => $ea) {
            echo "<option>" . $noticia . "</option>";
        }
        echo "</select>";
        // select con las categorías y un input para las noticias
        echo "<p>Escribe una nueva noticia: </p>";
        echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\">";
            echo "<label for=\"noticia\">Noticia </label>";
            echo "<input type=\"text\" name=\"noticia\" placeholder=\"noticia\"/><br>";
            echo "<br>";
            echo "<input type=\"submit\" name=\"enviarNoticia\" value=\"guardarNoticia\"/>";
        echo "</form>";
    ?>
</body>
</html>