<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Listado de Citas.</h2>
    <?php 

    // recorrer el array de citas e imprimir una tabla con las citas
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Fecha</th>";
    echo "<th>especialidad</th>";
    echo "<th>doctor</th>";
    echo "<th>paciente_id</th>";
    echo "</tr>";
    foreach ($data['cita'] as $cita) {
        echo "<tr>";
        echo "<td>" . $cita['id'] . "</td>";
        echo "<td>" . $cita['fecha_hora'] . "</td>";
        echo "<td>" . $cita['especialidad']['especialidad'] . "</td>";
        echo "<td>" . $cita['usuario']['nombre'] . "</td>";
        echo "<td>" . $cita['pacientes_id'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    

    ?>
</body>
</html>