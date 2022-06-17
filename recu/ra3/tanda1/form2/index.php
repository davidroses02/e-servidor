<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="procesa.php" method="post">
        
        <?php

            $array = array(
                "n1" => array(
                    "type" => "number",
                    "name" => "n1"
                ),
                "n2" => array(
                    "type" => "number",
                    "name" => "n2"
                ),
                "submit" => array(
                    "type" => "submit",
                    "name" => "Enviar"
                )
            );

            echo "<form>";
            foreach ($array as $key => $value) {
                echo "$value[name]: <input type=\"$value[type]\" value=\"$value[name]\" > <br>";
            }
            echo "</form>";

        ?>

    </form>
</body>
</html>