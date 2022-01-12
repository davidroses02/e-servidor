<?php  

/**
 *   Formulario para crear un currículum que incluya: Campos de texto, grupo de botones de opción, casilla
 *   de verificación, lista de selección única, lista de selección múltiple, botón de validación, botón de
 *   imagen, botón de reset, etc.
 * 
 *   @autor David Rosas
 */

    echo "<h1>Campos recogidos</h1>";

    echo "Nombre: " . $_POST['nombre'] . "<br>";
    echo "Apellidos: " .  $_POST['apellidos'] . "<br>";
    echo "Nacionalidad: " .  $_POST['nacionalidad'] . "<br>";
    echo "Provincia: " .  $_POST['provincia'] . "<br>";
    echo "Localidad: " .  $_POST['localidad'] . "<br>";
    echo "Telefono: " .  $_POST['telefono'] . "<br>";
    echo "Correo: " .  $_POST['correo'] . "<br>";
    echo "Aficiones: " .  $_POST['aficiones'] . "<br>";
    echo "Idiomas: " .  $_POST['idiomas'] . "<br>";
    echo "Género: " .  $_POST['gender'] . "<br>";
 
?>
  