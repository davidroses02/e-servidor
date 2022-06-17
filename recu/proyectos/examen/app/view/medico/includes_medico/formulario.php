<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="POST">

        <label for="paciente">Paciente</label>
        <select name="paciente" id="paciente">
            <?php
                echo "<option value='". $data['cita'][0]['pacientes_id'] ."'>" . $data['datosPaciente'][0]['codigo_asegurado'] . "</option>";
            ?>
        </select><br><br>

        <label for="hora">Diagnostico</label>
        <input type="text" name="diagnostico" id="diagnostico"><br><br>

        <label for="observaciones">Observaciones</label>
        <input type="text" name="observaciones" id="observaciones"><br><br>

        <label for="tratamiento">Tratamiento</label>
        <input type="text" name="tratamiento" id="tratamiento"><br><br>

        <label for="medico">Medico</label>
        <select name="medico" id="medico">
            <?php 
            echo "<option value='". $_SESSION['id'] ."'>" . $data['nombre'] . "</option>";
            ?>
        </select><br><br>

        <label for="idCita">Id de la Cita</label>
        <input type="text" name="idCita" value="<?php echo $data['cita'][0]['id']; ?>">

        <input type="submit" name="consulta" value="Crear consulta"><br>
    </form>
</body>
</html>