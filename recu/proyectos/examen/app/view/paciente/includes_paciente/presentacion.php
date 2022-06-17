<!DOCTYPE html>
<html lang="en">
<body>
    <?php 
        echo "<h2>Bienvenido ". $data['nombre'] .", te logueaste a las: " . $_SESSION['hora'] . "</h2>";
        echo "<p>Usted está logueado como: " . $_SESSION['perfil'] .".</p>";
    ?>
</body>
</html>