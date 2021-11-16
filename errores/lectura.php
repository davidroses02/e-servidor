<?php 


try {
    if (!file_exists("poerma.txt")) {
        throw new Exception("Fichero no encontrado");
    }
    $file = fopen("poerma.txt","r");
    while (!feof($file)) {
        echo fgets($file) . "<br>";
       }
    fclose($file);
} catch (Exception $e ) {
    echo $e ->getMessage();
    die();
}
    
?>