<?php

$ejercicios = array(
    array("Titulo" => "Formulario1", "Descripción" => "Ejercicio de formulario hecho en clase 1.0", "ruta" => "ra3/tanda1/form1/index.php"),
    array("Titulo" => "Formulario2", "Descripción" => "Ejercicio de formulario hecho en clase 2.0", "ruta" => "ra3/tanda1/form2/index.php"),
    array("Titulo" => "Formulario3", "Descripción" => "Ejercicio de formulario hecho en clase 3.0", "ruta" => "ra3/tanda1/form3/index.php"),
    array("Titulo" => "Formulario4", "Descripción" => "Ejercicio de formulario hecho en clase 4.0", "ruta" => "ra3/tanda1/form4/index.php"),
    array("Titulo" => "Multiplicar", "Descripción" => "Ejercicio multiplicar hecho en clase", "ruta" => "ra3/tanda1/multiplicar/index.php"),

    array("Titulo" => "Número aleatorio", "Descripción" => "Escribe un script que muestre al usuario un número aleatorio comprendido entre dos números que
han sido solicitados previamente mediante un formulario.", "ruta" => "ra3/tanda1/ejer1/index.php"),
    array("Titulo" => "Reescritura de contraseñas", "Descripción" => "Escribe un script que muestre un formulario con dos inputs de tipo password y verifique en el
servidor que las entradas coinciden.", "ruta" => "ra3/tanda1/ejer2/index.php"),
    array("Titulo" => "Operaciones Aritméticas", "Descripción" => "Escribe un script que muestre al usuario un formulario con una operación aritmética básica,
generada aleatoriamente. Una vez completado el formulario, el script indicará si la operación se
realizó correctamente.", "ruta" => "ra3/tanda1/ejer3/index.php"),
    array("Titulo" => "Encuesta", "Descripción" => "Escribe un script que muestre un formulario que permita la votación de 10 items (item1, item2, ...)
mediante un radio button de 1 a 5. La respuesta al formulario mostrará el item mejor valorado.", "ruta" => "ra3/tanda1/ejer4/index.php"),
    array("Titulo" => "Figuras geométricas", "Descripción" => "Escribe un script que muestre una figura geométrica utilizando el formato svg. Para ello el script
mostrará formulario con un radio button con las figuras disponibles: círculo, rectángulo, cuadrado y
un cuadro de texto para seleccionar el color. En función de la figura elegida, el script solicitará los
datos necesarios para su visualización.", "ruta" => "ra3/tanda1/ejer5/index.php"),

array("Titulo" => "Encuesta", "Descripción" => "Modifica el ejercicio 4 de Actividades 1 para almacenar las opciones de la encuesta en un array.", "ruta" => "ra3/tanda2/ejer1/index.php"),
    array("Titulo" => "Países y Capitales", "Descripción" => "Diseña y almacena en un array una lista de países junto con sus capitales. Muestra un formulario  que permita al usuario introducir las capitales de los países presentados. En respuesta al formulario,  la aplicación mostrará el número de aciertos y fallos.  ", "ruta" => "ra3/tanda2/ejer2/index.php"),
    array("Titulo" => "Comunidades autónomas", "Descripción" => "A partir de un array que almacena comunidades autónomas y provincias, escribe un programa que  muestre aleatoriamente una comunidad autónoma y presente un formulario con un checkbox que  permita seleccionar las provincias que pertenecen a la comunidad. En respuesta al formulario, la  aplicación mostrará número de aciertos y fallos. ", "ruta" => "ra3/tanda2/ejer3/index.php"),
    array("Titulo" => "Notas académicas", "Descripción" => "A partir de un array que almacene los datos de la primera y segunda evaluación de los alumnos de  2º DAW, mostrar un menú de navegación que muestre la siguiente información. • Listados de alumnos con las notas de la primera y segunda evaluación, junto con su nota  media. ", "ruta" => "ra3/tanda2/ejer4/index.php"),

)


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas</title>
</head>

<body>
    <h1>Ejercicios David Rosas</h1>
    <h2>RA3</h2>
    <?php

    foreach ($ejercicios as $key => $value) { ?>
        <?php
        echo "<h3>";
        echo "<strong>" . $value['Titulo'] . "</strong>";
        ?>
        <strong> <?php $value['Titulo'] ?> </strong>
        <?php
        echo "</h3>";
        echo "<p>" . $value['Descripción'] . "</p>";
        ?>
        <a href="<?php echo $value['ruta'] ?>">enlace</a>
    <?php } ?>

</body>

</html>