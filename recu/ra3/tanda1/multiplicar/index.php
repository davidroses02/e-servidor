<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aaa</title>
</head>

<body>

    <?php 

        $array = ["blue", "red", "orange", "yellow", "brown", "green", "black", "white", "grey", "purple"];
        echo "<table>";
        for ($i=0; $i < 9; $i++) { 
            echo "<tr>";
                for ($x=0; $x < 9; $x++) { 
                    echo "<td style=\"background-color:". $array[$x] ."\"> Celda ". $x ."</td>";
                }
            echo "</tr>";
        }
            echo "</table>";
    
    ?>

    

</body>

</html>