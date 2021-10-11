<?php 

    /**
     * @autor David Rosas 
     * 
     * Enunciado: Un restaurante dispone de una carta de 3 primeros, 5 segundos y 3 postres. Almacenar información
     *   incluyendo foto y mostrar los menús disponibles. Mostrar el precio del menú suponiendo que éste se
     *   calcula sumando el precio de cada uno de los platos incluidos y con un descuento del 20 %.
     *
     */


    $menu = array (

        "primeros" => array(

            array (
                "nombre" => "Espaguetis a la carbonara",
                "Descripción" => "Espaguetis a la carbonara italiana",
                "Precio" => 12,
                "foto" => "./img/espaguetis.jpg"
            ),

            array (
                "nombre" => "Entrecot de vacuno",
                "Descripción" => "Un entrecot de 400g de vaca asturiana",
                "Precio" => 25,
                "foto" => "./img/entrecot.jpg"
            ),

            array (
                "nombre" => "Salmon",
                "Descripción" => "Salmon noruego 100% autentico",
                "Precio" => 22,
                "foto" => "./img/salmon.jpeg"
            )

        ),

        "segundos" => array (

            array (
                "nombre" => "Pollo al horno",
                "Descripción" => "Pollo al horno con patatas",
                "Precio" => 15,
                "foto" => "./img/pollo.jpg"
            ),

            array (
                "nombre" => "Berenjenas rellenas",
                "Descripción" => "Berenjenas rellenas de carne picada",
                "Precio" => 18,
                "foto" => "./img/Berenjenas.jpg"
            ),

            array (
                "nombre" => "Albondigas de calabacin",
                "Descripción" => "Albondigas con calabacion del huerto del restaurante",
                "Precio" => 24,
                "foto" => "./img/albondigas.jpg"
            ),

            array (
                "nombre" => "Dorada",
                "Descripción" => "Dorada fresca, recogida hoy mismo.",
                "Precio" => 20,
                "foto" => "./img/dorada.jpeg"
            ),

            array (
                "nombre" => "Pulpo a la gallega",
                "Descripción" => "Plato estrella de la casa",
                "Precio" => 15,
                "foto" => "./img/pulpo.jpg"
            )

        ),

        "postres" => array(

            array (
                "nombre" => "Tiramisú",
                "Descripción" => "",
                "Precio" => 8,
                "foto" => "./img/tiramisu.jpg"
            ),

            array (
                "nombre" => "Tarta de queso",
                "Descripción" => "",
                "Precio" => 8,
                "foto" => "./img/queso.jpg"
            ),

            array (
                "nombre" => "Bombones de chocolate",
                "Descripción" => "",
                "Precio" => 8,
                "foto" => "./img/bombones.jpeg"
            )

        ),

    );



    echo "menu: " , $menu['primeros'][0]["nombre"] , "<br>";

    echo '<img src='.$menu['primeros'][0]['foto'].'>' , "<br>";



?>