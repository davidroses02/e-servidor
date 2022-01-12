<?php 

/**
 * @autor David Rosas
 */

    // Creamos la sesión -> si la sesión no está creada la creamos con el usuario invitado por defecto.
    session_start();
    if (!isset($_SESSION['usuario'])) {
        $_SESSION['usuario'] = 'invitado';
        $_SESSION['psw'] = '';
        $_SESSION['perfil'] = 'invitado';
        $_SESSION['id'] = 0;
    }

    // Array de usuarios
    $usuarios = array(
        array("id" => 0, "usuario" => "admin", "psw"=>"admin", "nombre"=>"administrador", "perfil"=>"administrador"),
        array("id" => 1, "usuario" => "agente1", "psw"=>"agente1", "nombre"=>"Agente 1", "perfil"=>"agente"),
        array("id" => 2, "usuario" => "agente2", "psw"=>"agente2", "nombre"=>"Agente 2", "perfil"=>"agente")
    );

    $invalido = false;
    // Proceso de login
    if (isset($_POST['enviar'])) {
        $usuario = $_POST['usuario'];
        $psw = $_POST['psw'];
        $invalido = true;
        foreach ($usuarios as $user) {
            if ($user['usuario'] == $usuario && $psw == $user['psw']) {
                $_SESSION['usuario'] = $usuario;
                $_SESSION['psw'] = $psw;
                $_SESSION['perfil'] = $user['perfil'];
                $_SESSION['id'] = $user['id'];
                $invalido = false;
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
        
        echo "<h2>Bienvenido " . $_SESSION['usuario'] . "</h2>";
    
        // Formulario login
        if ($_SESSION['perfil'] == 'invitado') {
            echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\">";
                echo "<label for=\"usuario\">Usuario </label>";
                echo "<input type=\"text\" name=\"usuario\" placeholder=\"Usuario\"/><br>";
                echo "<label for=\"psw\">Contraseña </label>";
                echo "<input type=\"text\" name=\"psw\" placeholder=\"Contraseña\"/><br>";
                echo "<br>";
                echo "<input type=\"submit\" name=\"enviar\" value=\"Iniciar sesión\"/>";
            echo "</form>";
        }
        
        // Inicio no válido
        if ($invalido) {
            echo "<p style=\"color:red;\">Datos de inicio de sesión incorrectos</p>";
        }
    
        // Enlaces agente
        if ($_SESSION['perfil'] == 'agente') {
            echo "<a href=\"index.php\">Inicio</a> | ";
            echo "<a href=\"agente.php\">Gestión de multas</a> | ";
            echo "<a href=\"salir.php\">Cerrar sesión de " . $_SESSION['perfil'] . "</a><br>";
        }

        // Enlaces administrador
        if ($_SESSION['perfil'] == 'administrador') {
            echo "<a href=\"index.php\">Inicio</a> | ";
            echo "<a href=\"admin.php\">Resumen de multas</a> | ";
            echo "<a href=\"salir.php\">Cerrar sesión de " . $_SESSION['perfil'] . "</a><br>";
        }

        // Mostrar multas
        if (isset($_SESSION['multas'])) {
            echo "<h2>TABLA DE MULTAS</h2>";
            echo "<br>";
            echo "<table border>";
            echo "<tr>";
                echo "<th>Matrícula</th>";
                echo "<th>Descripción</th>";
                echo "<th>Fecha</th>";
                echo "<th>Importe</th>";
                echo "<th>Estado</th>";
            echo "</tr>";
            $indice = 0;
            foreach ($_SESSION['multas'] as $multa) {
                echo "<tr>";
                    echo "<td>" . $multa['matricula'] . "</td>";
                    echo "<td>" . $multa['descripcion'] . "</td>";
                    echo "<td>" . $multa['fecha'] . "</td>";
                    echo "<td>" . $multa['importe'] . "</td>";
                    if ($multa['estado'] == 'Pendiente') {
                        echo "<td><a href=\"pagamulta.php?id=" . $indice . "\" title=\"Pagar multa\">" . $multa['estado'] . "</a></td>";
                    } else {
                        echo "<td>" . $multa['estado'] . "</td>";
                    }
                echo "</tr>";
                $indice++;   
            }
            echo "</table>";
        }


    ?>

</body>
</html>