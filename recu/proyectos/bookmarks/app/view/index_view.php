<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookmarks</title>
</head>
<body>
    <?php 
        if ($_SESSION['perfil'] === 'invitado') {
            include('includes_invitado/login.php');
        }
        if ($_SESSION['perfil'] === 'admin') {
            
        }
        
    ?>
</body>
</html>