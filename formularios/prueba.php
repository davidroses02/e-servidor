<?php 
/**
 * 
 var_dump($_POST);
 echo "<br>";
 echo $_GET["nombre"] . " ";
 echo $_GET["apellidos"];
 */

$datosPersonales = array(
    "nombre" => "Dani",
    "apellidos" => "Ayala Cantador",
    "direccion" => "fidiana",
);

echo ("<form action="mostrar_formulario.php" method="post">");

foreach ($datosPersonales as $key => $value) {
    echo("
        <label>Info
            <input type="text" name="" value=" ".$datosPersonales[$key]." ">
        </label><br>
    ");
}
echo("<input type="submit" value="">");
echo ("</form>");

?>