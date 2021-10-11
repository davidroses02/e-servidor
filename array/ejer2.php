<?php 

    /**
     * @autor David Rosas
     * 
     * Crear un array con los alumnos de clase y permitir la selección aleatoria de uno de ellos. El resultado
     *   debe mostrar nombre y fotografía.
     * 
     */

    $alumnado = array (

        array ( 
            "nombre" => "Alejandro Rabadan Rivas",
            "ruta" => "./img/AlejandroRabadanRivas.jpg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Carlos Chaves",
            "ruta" => "./img/CarlosChaves.jpg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Carlos Hidalgo Risco",
            "ruta" => "./img/CarlosHidalgoRisco.PNG",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Daniel Ayala Cantador",
            "ruta" => "./img/DanielAyalaCantador.png",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => " David Perez Ruiz",
            "ruta" => "./img/DavidPerezRuiz.png",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => " David Rosas Alcaraz",
            "ruta" => "./img/DavidRosasAlcaraz.jpg",
            "categoria" => "Delegado" 
        ),
        array ( 
            "nombre" => "Guillermo Tamajon Hernandez",
            "ruta" => "./img/GuillermoTamajonHernandez.jpg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "javier Cebrian Muñoz",
            "ruta" => "./img/javierCebrianMuñoz.jpeg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Javier Epifanio López",
            "ruta" => "./img/JavierEpifanioLópez.jpeg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "javier fernandez rubio",
            "ruta" => "./img/javierfernandezrubio.jpeg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Javier Salazar Almagro",
            "ruta" => "./img/JavierSalazarAlmagro.jpg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Jesus Diaz Rivas",
            "ruta" => "./img/JesusDiazRivas.jpg",
            "categoria" => "Subdelegado" 
        ),
        array ( 
            "nombre" => " Joaquin Baena Salas",
            "ruta" => "./img/JoaquinBaenaSalas.jpg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "JuanManuel Gonzalez Profumo",
            "ruta" => "./img/JuanManuelGonzalezProfumo.jpg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => " Laura Hidalgo Rivera",
            "ruta" => "./img/LauraHidalgoRivera.jpg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Manuel Brito",
            "ruta" => "./img/ManuelBrito.jpg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Manuel Solar Bueno",
            "ruta" => "./img/ManuelSolarBueno.jpg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Rafael Yuste",
            "ruta" => "./img/RafaelYuste.png",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Ruben Ramirez Rivera",
            "ruta" => "./img/RubenRamirezRivera.jpeg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "sergio vera",
            "ruta" => "./img/sergiovera.png",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Tomas Hidalgo Martin",
            "ruta" => "./img/TomasHidalgoMartin.jpg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Virginia Ordoño",
            "ruta" => "./img/VirginiaOrdoño.jpg",
            "categoria" => "" 
        ),
        array ( 
            "nombre" => "Andrea Solis Tejada",
            "ruta" => "./img/AndreaSolisTejada.jpeg",
            "categoria" => "" 
        )

    );


    $random = random_int(0, 22);
    echo "Alumno: " , $alumnado["$random"]['nombre'] , "<br>";
    echo '<img src='.$alumnado["$random"]['ruta'].'>' , "<br>";
    echo "Categoría: " , $alumnado["$random"]['categoria'];

?>