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
        <label>Número 1:</label><input type="number" name="n1">
        <label>Número 2:</label><input type="number" name="n2"><br>

        suma <input type="checkbox" value="sumar" name="opera"><br>
        resta <input type="checkbox" value="resta" name="resta"><br>
        mult <input type="checkbox" value="mult" name="mult"><br>
        dividir <input type="checkbox" value="dividir" name="dividir"><br>

        <input type="submit" name="enviar">
    </form>
</body>

</html>