<?php 

$comunidadesAutonomas = array (
    array(
        "comunidad" => "Andalucía",
        "provincias" => array(
            "Almería",
            "Cádiz",
            "Córdoba",
            "Granada",
            "Huelva",
            "Jaén",
            "Málaga",
            "Sevilla",
        )
    ),
    array(
        "comunidad" => "Aragón",
        "provincias" => array(
            "Huesca",
            "Teruel",
            "Zaragoza",
        )
    ),
    array(
        "comunidad" => "Asturias",
        "provincias" => array(
            "Asturias",
        )
    ),
    array(
        "comunidad" => "Baleares",
        "provincias" => array(
            "Islas Baleares",
        )
    ),
    array(
        "comunidad" => "Canarias",
        "provincias" => array(
            "Las Palmas",
        )
    ),
    array(
        "comunidad" => "Cantabria",
        "provincias" => array(
            "Cantabria",
        )
    )
);

$numeroAleatorio = rand(0, count($comunidadesAutonomas)-1);
$comunidad = $comunidadesAutonomas[$numeroAleatorio]["comunidad"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comunidades</title>
</head>
<body>
    <h2>Comunidades y provincias</h2>
    <form action="" method="POST">
        <?php 
            echo "<h3>Necesito las provincias de: ".$comunidad."</h3>";
            foreach ($comunidadesAutonomas as $key => $value) {
                foreach ($value["provincias"] as $key2 => $value2) {
                    echo '<input type="checkbox" name="provincias[]" value="'.$value2.'">'.$value2.'<br>';
                }
            }
            echo "<br>";
        ?>
        <input type="submit" value="Enviar" name="Enviar">  
</body>
</html>

<?php 
    $procesaFormulario = false;

    if (isset($_POST["Enviar"])) {
        $procesaFormulario = true;
        $aciertos = 0;
        $fallos = 0;
        $aAciertos = array();
        $aProvincias = $_POST["provincias"];

        foreach ($aProvincias as $key => $value) {
            if (esCorrecto($aProvincias, $comunidad, $comunidadesAutonomas)) {
                $fallos++;
            } else {
                $aciertos++;
                array_push($aAciertos, $value);
            }
        }

        echo "<br>";
        echo "Aciertos: " . $aciertos . "<br>";
        echo "Fallos: " . $fallos . "<br>";
    }

    function esCorrecto($aProvincias, $comunidad, $comunidadesAutonomas)
    {
        foreach ($comunidadesAutonomas as $key => $value) {
            if ($value["comunidad"] == $comunidad) {
                foreach ($value["provincias"] as $key2 => $value2) {
                    if (in_array($value2, $aProvincias)) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comunidades</title>
</head>
<body>
    <form>
        <?php 
        if ($procesaFormulario) {
            foreach ($aAciertos as $key => $value) {
                echo '<input type="hidden" name="aciertos[]" value="'.$value.'">';
            }
            echo '<input type="submit" value="verAciertos" name="verAciertos">';
        }
        ?>
    </form>
</body>
</html>

<?php 

    if (isset($_POST["verAciertos"])) {
        $aAciertos = $_POST["aciertos"];
        foreach ($aAciertos as $key => $value) {
            echo "<span style='color:green;'>".$value."</span><br>";
        }
        
    }

?>