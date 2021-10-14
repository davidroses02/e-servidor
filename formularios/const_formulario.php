<?php 

    $form = array(
        "nombre" => array(
            "tipo" => "text" 
        ),

        "apellidos" => array(
            "tipo" => "text"
        ),

        "curso" => array(
            "tipo" => "radio",
            "opciones" => array("1ASIR","1DAW","2DAW","2ASIR")
        ),

        "repetidor" => array(
            "tipo" => "radio",
            "opciones" => array("si","no")
        )
    );

    echo "<form>";
    
    foreach ($form as $key => $value) {

        $tipo = $value["tipo"];

        if ($tipo == "text") {
            echo "<label>$key";
            echo "<input type=$tipo name=$key value= >";
        };
        
        if ($tipo == "radio") {
            echo "<label>$key: ";
            
            foreach ($value["opciones"] as $x => $y) {
                    
                echo " $y <input type=$tipo name=$key value= >";
                    
            };

        };

        echo "</label><br>";
        
    }
    echo '<input type="submit" value="Enviar">';
    echo "</form>";

?>