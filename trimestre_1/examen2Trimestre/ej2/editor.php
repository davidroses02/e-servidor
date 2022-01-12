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
    
        echo "<h2>Inserta una nueva categoría</h2>";
        echo "<br>";
        echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\">";
            echo "<label for=\"categoria\">Categoría </label>";
            echo "<input type=\"text\" name=\"categoria\" placeholder=\"categoria\"/><br>";
            echo "<br>";
            echo "<input type=\"submit\" name=\"enviar\" value=\"guardar\"/>";
        echo "</form>";
    ?>

</body>
</html>