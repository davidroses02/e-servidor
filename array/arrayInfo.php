<?php 

    $covid = array(
        "Cordoba" => 34,
        "Sevilla"  => 100,
        "Granada" => 42,
        "Almeria" => 71,
        "Malaga" => 14,
        "Huelva" => 10,
        "Jaen" => 72,
        "Cadiz" => 40 );

        foreach ($covid as $key => $value) {
            echo "$key " , " = " , "$value";
            echo "<br>";
        }

        echo "<br>" , "<br>";

        $families = array (
            "Griffin"=> array ("Peter", "Lois", "Megan"),
            "Quagmire"=> array("Glenn"),
            "Brown"=> array("Cleveland", "Loretta", "Junior") );

        
        foreach ($families as $key => $value) {
            echo "$key" , " => ";
            foreach ($value as $arr => $miembros) {
                echo "$miembros ";
            };
            echo "<br>";
        };

        echo "<br>" , "<br>";

        $frutas = array(
            "manzana" => array(
                    "color" => "rojo",
                    "sabor" => "dulce",
                    "forma" => "redondeada"),
            "naranja" => array(
                    "color" => "naranja",
                    "sabor" => "ácido",
                    "forma" => "redondeada"),
            "plátano" => array(
                    "color" =>"amarillo",
                    "sabor" => "paste-y",
                    "forma" => "aplatanada") );

        foreach ($frutas as $key => $value) {
            
            echo "$key" , " = ";

            foreach ($value as $key2 => $value2) {
                
                echo " $value2";

            };
            echo "<br>";
        };

        echo "<br>" , "<br>";

        $frutas = array(
            
            "Jesus Díaz Rivas" => 
            "Manuel Brito Guerrero" =>
            "Laura Hidalgo Rivera" =>
            "Tomás Hidalgo Martín" =>
            "Carlos Hidalgo Risco" =>
            "Daniel Ayala Cantador" =>
            "Javier Cebrián Muñoz" =>
            "Javier Fernández Rubio" =>
            "Rubén Ramírez Rivera" =>
            "David Pérez Ruiz" =>
            "Alejandro Rabadán Rivas" =>
            "David Rosas Alcaraz" =>
            "Andrea Solís Tejada" =>
            "Juan Manuel González Prófumo" =>
            "Rafael Yuste Barrera" =>
            "Javier Epifanio López" =>

        );
        
?>