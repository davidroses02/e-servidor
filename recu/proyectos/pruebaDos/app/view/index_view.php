<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vista principal. CRUD.</h1>
    <?php 
        //session_start();
        if ($_SESSION['perfil'] === 'invitado') {   
            echo '<p>' . 'Bienvenido '.$_SESSION['perfil']. '.' . '</p>';
            include('../app/view/include/formUsuarios.php');
            include('../app/view/include/buscarPalabraInput.php');
            include('../app/view/include/lastWordsInvitado.php');
        }
        if ($_SESSION['perfil'] === 'admin') {
            echo '<p>' . 'Bienvenido '.$_SESSION['usuario']. '.  ' . 'Te has logueado: ' . $_SESSION['fecha'].'</p>';
            include('../app/view/include/enlaceAddWord.php');
            include('../app/view/include/buscarPalabraInput.php');
            include('../app/view/include/lastWords.php');
        }
    ?>
</body>
</html>