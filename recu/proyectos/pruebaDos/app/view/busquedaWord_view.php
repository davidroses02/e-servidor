<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        if (isset($data)) {
            echo '<p>' . $data . '</p>';
        }

        if (isset($palabras)) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Palabra</th>";
            echo "</tr>";
            foreach ($palabras as $key => $value) {
                echo '<tr>';
                echo '<td>' . $value['id'] . '</td>';
                echo '<td>' . $value['palabra'] . '</td>';
                echo '</tr>';
            }
            echo "</table>";
        }
    ?>
</body>
</html>