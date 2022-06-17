<?php 

$procesaformulario = false;

if (isset($_POST['Resolver'])) {
    $procesaformulario = true;
    
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $aleatorio = random_int($n1, $n2);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NumAleatorio</title>
</head>

<body>
    <form method="POST" action="">
        Nº Inferior: <input type="number" name="n1">
        Nº Superior: <input type="number" name="n2">
        <input type="submit" name="Resolver" value="Resolver">
    </form>
</body>

</html>

<?php 

if ($procesaformulario) {
    echo $aleatorio;
}

?>