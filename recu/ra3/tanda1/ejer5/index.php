<?php 

$lprocesaFormulario = false;

if (isset($_POST["enviar"])) {
    $carac = $_POST;
    $lprocesaFormulario = true;
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosas</title>
</head>
<body>
    <h1>Figura geométrica</h1>
    <form action="" method="POST">
        Círculo<input type="radio" name="figura" value="circulo"><br>
        Rectángulo<input type="radio" name="figura" value="rectangulo"><br>
        Cuadrado<input type="radio" name="figura" value="cuadrado"><br>
        Color de la figura: <input type="text" name="color" placeholder="color en inglés">
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>

<?php 

if ($lprocesaFormulario) { 
    $figura = $carac["figura"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosas</title>
</head>
<body>
    <h1>Figura geométrica</h1>
    <form method="POST" action="">
        <?php 
            switch ($figura) {
                case 'rectangulo':
                    echo "Tamaño del " . $figura  . ".";
                    echo "Base <input type=\"number\" name=\"base\"> ";
                    echo "Altura <input type=\"number\" name=\"altura\"> ";
                    break;
                case 'circulo':
                    echo "Radio del". $figura . ": <input type=\"number\" name=\"radio\"> ";
                    break;
                case 'cuadrado':
                    echo "Lado del". $figura . ": <input type=\"number\" name=\"lado\"> ";
                    break;
            }
        ?>
        
        <?php 
            foreach ($carac as $key => $value) {
                echo '<input type="hidden" name="campoOculto[]" value="'. $value. '">';
            }
        
        ?>
        <input type="submit" value="imprimir" name="imprimir">
    </form>
</body>
</html>

<?php
}

if (isset($_POST["imprimir"])) {
    
    $array = $_POST["campoOculto"];
    $figuraGeo = $array[0];

    
    switch ($figuraGeo) {
        case 'rectangulo':

            $figuraColor = $array[1];
            $figuraBase = $_POST["base"];
            $figurAltura = $_POST["altura"];
            echo "<svg height=\"500\" width=\"500\">";
                echo "<rect  width=".$figuraBase." height=".$figurAltura." stroke=\"black\" stroke-width=\"3\" fill=". $figuraColor ." />";
            echo "</svg>";

            break;
        case 'circulo':

            $figuraColor = $array[1];
            $figuraRadio = $_POST["radio"];
            echo "<svg height=\"500\" width=\"500\">";
                echo "<circle cx=\"250\" cy=\"250\" r=" . $figuraRadio ." stroke=\"black\" stroke-width=\"3\" fill=". $figuraColor ." />";
            echo "</svg>";

            break;
        case 'cuadrado':

            $figuraColor = $array[1];
            $figuraLado = $_POST["lado"];
            echo "<svg height=\"500\" width=\"500\">";
                echo "<rect  width=".$figuraLado." height=".$figuraLado." stroke=\"black\" stroke-width=\"3\" fill=". $figuraColor ." />";
            echo "</svg>";

        break;
    }


}

?>