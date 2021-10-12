<?php 

    /**
     * @autor: David Rosas
     * 
     * Indexación de los ejercicios mediante un array.
     * 
     */

    $ejercicios = array ( 

        "bucles" => array ( 

            "ruta" => "../Act_3/act_clase/bucles/",

            "ejercicio" => array (
                array (
                    "nombre" => "ejer1.php"
                ),
                array (
                    "nombre" => "ejer2.php"
                ),
                array (
                    "nombre" => "ejer3.php"
                ),
                array (
                    "nombre" => "ejer4.php"
                ),
                array (
                    "nombre" => "ejer5.php"
                )

            )
        ),

        "array" => array (

            "ruta" => "./",

            "ejercicio" => array (
                array (
                    "nombre" => "ejer1.php"
                ),
                array (
                    "nombre" => "ejer2.php"
                ),
                array (
                    "nombre" => "ejer3.php"
                ),
                array (
                    "nombre" => "ejer4.php"
                ),
                array (
                    "nombre" => "ejer5.php"
                )
            )

        )

    );

    foreach ($ejercicios as $categorias => $segundo_array) {
        
        echo "<ol>";
        echo "<li>$categorias</li><br>";
        echo "</ol>";
        
        echo "<ol>";
        foreach ($segundo_array as $contenido => $valor) {
            
            if ($contenido == "ruta") {
                $ruta = $valor;
            };
            
            if ($contenido == "ejercicio") {
                
                foreach ($valor as $x) {

                    foreach ($x as $nombre => $value) {

                        $ea = "$ruta" . "$value";
                        echo "<li><a href= '$ea' > '$value' </a></li>";

                    }

                };
                
            };
            
        };

        echo "</ol>";

    };

?>

