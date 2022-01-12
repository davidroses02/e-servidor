<?php 

/**
 *   Crear una aplicación que almacene información de países: nombre capital y bandera. Diseñar un
 *   formulario que permita seleccionar un país y nos muestre el nombre de la capital y la bandera.
 * 
 *  @autor David Rosas
 * 
 */

    $array = array(
        array(
            "capital" => "Madrid",
            "ruta" => "./img/españa.jpg",
            "nombre" => "España"
        ),
        array(
            "capital" => "Atenas",
            "ruta" => "./img/grecia.png",
            "nombre" => "Grecia"
        ),
        array(
            "capital" => "Lisboa",
            "ruta" => "./img/portugal.png",
            "nombre" => "Portugal"
        ),
        array(
            "capital" => "Ottawa",
            "ruta" => "./img/canada.jpg",
            "nombre" => "Canadá"
        ),
        array(
            "capital" => "Berlín",
            "ruta" => "./img/alemania.jpg",
            "nombre" => "Alemania"
        )
    );

    foreach ($array as $paises) {
        
        foreach ($paises as $key => $value) {
            
            if ($key == "capital") {
                $capital = $value;
            }
            
            if ($key == "ruta") {
                $ruta = $value;
            }

            if ($value == $_POST['pais']) {
                echo $value  . "<br>";
                echo $capital . "<br>";
                echo "<img src=" . $ruta . ">"; 
            }
            
        }
    }
    
?>