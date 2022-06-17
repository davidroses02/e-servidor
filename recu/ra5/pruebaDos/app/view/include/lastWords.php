<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Últimas Palabras</h2>
    <?php
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Palabra</th>";
        echo "<th>Created_at</th>";
        echo "<th>Editar</th>";
        echo "<th>eliminar</th>";
        echo "</tr>";
        foreach ($data as $key => $value) {
            echo '<tr>';
            echo '<td>' . $value['id'] . '</td>';
            echo '<td>' . $value['palabra'] . '</td>';
            echo '<td>' . $value['created_at'] . '</td>';
            echo '<td><a href="' . DIRBASEURL . '/word/edit/' . $value['id'] . '">Editar</a></td>';
            echo '<td><a href="' . DIRBASEURL . '/word/delete/' . $value['id'] . '">Eliminar</a></td>';
            echo '</tr>';
        }
        echo "</table>";
    ?>
</body>
</html>