<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Editar Palabra</h2>
    <?php 
        if (isset($mensaje)) {
            echo '<p style="color:red">' . $mensaje['error'] . '</p>';
        }
    ?>
    <form action="" method="post">
        <input type="text" name="id" value="<?php echo $data['id'] ?>">
        <input type="text" name="word" placeholder="Palabra">
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>