<?php 

/**
 * @author David Rosas
 */

    session_start();
    if ($_SESSION['perfil'] == 'administrador') {
        $acceso = true;
    } else {
        header('Location: index.php');
    }

    $contadores = array("01" => 0, "02" => 0, "03" => 0, "04" => 0,
    "05" => 0, "06" => 0, "07" => 0, "08" => 0, "09" => 0, "10" => 0,
    "11" => 0, "12" => 0);

    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    $mostrar = false;
    $invalido = false;

    if (isset($_POST['buscarAnno'])) {
        if ($_POST['anno'] >= 2000 && $_POST['anno'] <= 2038) {
            foreach ($_SESSION['multas'] as $multa) {
                if (substr($multa['fecha'], 0, 4) == $_POST['anno']) {
                    $contadores[substr($multa['fecha'], 5, 2)]++;
                }
            }
            $mostrar = true;
        } else {
            $invalido = true;
        }
    }

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
    
        if ($acceso) {
            echo "<h3>Bienvenido " . $_SESSION['usuario'] . "</h3>";
        
            echo "<a href=\"index.php\">Inicio</a> | ";
            echo "<a href=\"admin.php\">Resumen de multas</a> | ";
            echo "<a href=\"salir.php\">Cerrar sesión de " . $_SESSION['perfil'] . "</a><br><br>";
        
            echo "<h3>Informe anual de multas.</h3>";
            
            echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\">";  
                    // Año
                    echo "<label for=\"anno\">Año </label>";
                    echo "<input type=\"text\" name=\"anno\"/><br>";
                    echo "<input type=\"submit\" name=\"buscarAnno\" value=\"Buscar\"/>";
            echo "</form>";
        
            if ($invalido) {
                echo "<p style=\"color:red;\">Año incorrecto</p>";
            }
        
            if ($mostrar) {
                foreach ($contadores as $mes => $nMultas) {
                    if (substr($mes, 0, 1) == 0) {
                        $mes = substr($mes, 1, 1);
                    }
                    echo "<p>" . $meses[$mes-1] . ": " . $nMultas . "</p>";
                }
            }
        
            
        }
    



    ?>
</body>
</html>