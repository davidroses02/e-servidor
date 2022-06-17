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
        echo "</tr>";
        foreach ($data as $key => $value) {
            echo '<tr>';
            echo '<td>' . $value['id'] . '</td>';
            echo '<td>' . $value['palabra'] . '</td>';
            echo '<td>' . $value['created_at'] . '</td>';
            echo '</tr>';
        }
        echo "</table>";
    ?>
</body>
</html>