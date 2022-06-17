<?php 

$aPaises = array(
     array(
         'pais' => 'España',
         'capital' => 'Madrid',
     ),
     array(
         'pais' => 'Francia',
         'capital' => 'París',
     ),
     array(
         'pais' => 'Italia',
         'capital' => 'Roma',
     ),
     array(
         'pais' => 'Portugal',
         'capital' => 'Lisboa',
     ),
     array(
         'pais' => 'Alemania',
         'capital' => 'Berlín',
     ),
    array(
        'pais' => 'Reino Unido',
        'capital' => 'Londres',
    ),
    array(
        'pais' => 'Irlanda',
        'capital' => 'Dublín',
    ),
    array(
        'pais' => 'Holanda',
        'capital' => 'Amsterdam',
    )
);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ejer1</title>
    </head>
    <body>
        <h2>Paises</h2>
        <form  action="" method="POST">
            <?php 
                foreach ($aPaises as $key => $value) {
                    echo ' '.$value['pais'].': <input type="text" name="capitales[]" placeholder="Capital"><br>';
                }
            ?>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
</body>
</html>

<?php

if (isset($_POST["Enviar"])) {
    
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    $aciertos = 0;
    $fallos = 0;
    $aFallos = array();

    $aCapitales = $_POST["capitales"];

    for ($i=0; $i < count($aCapitales); $i++) { 
        if ($aCapitales[$i] == $aPaises[$i]["capital"]) {
            $aciertos++;
        } else {
            $fallos++;
            array_push($aFallos, $aPaises[$i]["capital"]);
            
        }
    }

    echo "Aciertos: " . $aciertos . "<br>";
    echo "Fallos: " . $fallos . "<br>";

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ejer1</title>
    </head>
    <body>
        <form action="" method="post">
            <?php
                foreach ($aFallos as $key => $value) {
                    echo '<input type="hidden" name="errores[]" value="'. $value. '">';
                }
            ?>
            <input type="submit" value="error" name="error">
        </form>
    </body>
    </html>

    <?php
}

if (isset($_POST["error"])) {
    $aErrores = $_POST["errores"];
    foreach ($aErrores as $key => $value) {
        echo "<span style='color:red;'>".$value."</span><br>";
    }

}

?>
