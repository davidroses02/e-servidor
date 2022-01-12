<?php 

function conectaDB() {
    try {
        $dsn = "mysql:host=localhost;dbname=phppracticas";
        $db = new PDO($dsn, 'root', '');
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'set names utf8');
        return($db);

    } catch (PDOException $e) {
        echo "Error conexión";
        exit();
    }
}

?>