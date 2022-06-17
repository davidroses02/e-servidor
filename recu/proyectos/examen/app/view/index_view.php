<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen</title>
</head>
<body>
    <h3>Bienvenido al centro de salud Gran Capitán.</h3>
    <h1>Login</h1>
    <form action="" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">
        <label for="password">Password</label>
        <input type="text" name="password" id="password">
        <?php 
            // mostrar 5 numeros aleatorios del 1 al 20 con checkbox
            echo "<br>";
            echo "<h3>Captcha. Elige los números pares.</h3>";
            for ($i=1; $i <= 5; $i++) { 
                $numero = rand(1, 20);
                echo "<input type='checkbox' name='numerosAleatorios[]' value='$numero'>$numero<br>";
            }
            echo "<br>";

        ?>
        <input type="submit" value="login" name="login">
    </form>
    <?php 

        $bandera = true;

        if (count($data) > 1) {
            $bandera = false;
            echo "<p>Usuario o contraseña incorrectos</p>";
        }

        if (isset($data['error_usuario']) && $bandera) {
            echo "<p>" . $data['error_usuario'] . "</p>";
        }

        if (isset($data['error_password'])  && $bandera) {
            echo "<p>" . $data['error_password'] . "</p>";
        }

        if (isset($data['error_numeros'])  && $bandera) {
            echo "<p>" . $data['error_numeros'] . "</p>";
        }
    ?>
</body>
</html>