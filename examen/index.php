<?php 

/**
 * @author David Rosas [$_POST["test"]-1]
 */

    include("./config/tests_cnf.php");
    $testElegido = $_POST["test"]-1;

    foreach ($aTests as $arr) {
        
        foreach ($arr as $categorias => $valores) {

            if ($valores == $_POST["test"]) {
                    
                echo "<h1>Bienvenido al examen téorico</h1><br>";
                echo "Test número: " . $valores . "<br>";

                $i = 1;
                foreach ($preguntas as $arr[$testElegido] => $arrIndex) {
                    foreach ($arrIndex as $key => $value) {
                        
                        if ($key == "Pregunta") {
                            echo "$value" . "<br>";
                        }

                        if ($key == "respuestas") {
                            echo "<img src=" . "./" ."dir_img_test" . $_POST["test"] . "/" . "img" . $i++ . ".jpg" .">"; 
                            echo "<form>";
                            foreach ($value as $key => $respuestas) {
                                echo "<input type=\"radio\" name=\"respuesta\" value = \"$respuestas\" >$respuestas";
                            };
                            echo "</form>";
                        }
                        
                    }
                }
                
                    
            }

        }

  
  }

?>