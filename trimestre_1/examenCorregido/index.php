<?php
include('config/tests_cnf.php');

$testDisponibles=array_map(function ($v) {return 'Test: '.$v['idTest'].','.$v['Permiso'].','.$v['Categoria'];},$aTests);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>Tests</h1>
    <h2>Seleccione test</h2>
    <form action="mostrarTest.php" method="post">
        <select name="numero_test">
            <?php
                foreach ($testDisponibles as $test) {
                    echo '<option value="'.$test.'">'.$test.'</option>';
                }
            ?>
        </select>
        <input type="submit" value="Enviar" name="submitTest">
    </form>
</body>
</html>