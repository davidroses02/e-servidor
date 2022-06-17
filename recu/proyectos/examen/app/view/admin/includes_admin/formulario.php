<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="POST">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">
        <br><br>
        <?php
        // genera una conraseña aleatoria
        $password = substr(md5(microtime()), 0, 8);
        ?>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" value="<?php echo $password?>"><br><br>

        <label for="especialidad">Especialidad</label>
        <select name="especialidad">
            <?php
            foreach ($data['especialidades'] as $especialidad) {
                echo "<option value='" . $especialidad['id'] . "'>" . $especialidad['especialidad'] . "</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" name="crearMedico" value="crearMedico"><br>

        
    </form>
</body>
</html>