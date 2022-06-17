<!DOCTYPE html>
<html lang="en">
<body>
    <?php 
        echo "<h2>Bienvenido ". $_SESSION['perfil'] .", te logueaste a las: " . $_SESSION['hora'] . "</h2>";
        echo "<p>Usted está logueado como: " . $_SESSION['perfil'] .".</p>";
    ?>
</body>
</html>