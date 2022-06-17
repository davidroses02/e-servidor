<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        echo "<form action=\"\" method=\"post\">";
            echo "<select name=\"numeros\" id=\"numeros\">";
            for ($i = 2; $i < 11; $i++) {
                echo "<option>$i</option>";
            }
            echo "</select>";
            echo "<input type=\"submit\" name=\"enviar\" name=\"Enviar\" >";
        echo "</form>";
    ?>


    <?php
        //  
        if (isset($_POST["enviar"]) || isset($_POST["Sumar"])) {
            if (isset($_POST["enviar"])) {
                $numInputs = $_POST["numeros"];
            }
            if (isset($_POST["Sumar"])) {
                $numInputs = $_POST["numInputs"];
            }
            echo "<form action=\"\" method=\"post\">";
            for ($i = 0; $i < $numInputs; $i++) {
                if (isset($_POST["Sumar"])) {
                    echo 'Input nº '.$i . ': <input type=\"number\" name=\"num[]\" value="' . $_POST["num"][$i] . '" > ';
                } else {
                    echo "Input nº" . "$i: " . "<input type=\"number\" name=\"num[]\"> ";
                }
            }
            echo "<input type=\"hidden\" name=\"numInputs\" value=\"$numInputs\">";
            echo "<input type=\"submit\" name=\"Sumar\" value=\"Sumar\">";
            echo "</form>";
        }

    ?>

    <?php

        if (isset($_POST["Sumar"])) {
            $resultado = 0;
            foreach ($_POST["num"] as $key => $value) {
                $resultado += $value;
            }
            echo "El resultado es: " . "$resultado";
        }
    ?>

</body>

</html>