<?php 

    /**
     * Antes de crear el html debemos pensar en el tipo de formulario.
     * 
     * 
     */

    function clear_data($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    
    // Ponemos todas las variables vacias.
    $name = $email = $gender = $comment = $website = $idioma = $nivelIdioma = $multiple = ""; 

    // Ponemos as variables de error vacia.
    $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = $idiomaErr = $nivelIdiomaErr = $multipleErr = ""; 

    // Para genero trabajaremos con un array
    $aGenero = array("femenino","masculino","otro");
    // error genero
    $genderErr = "";
    
    // array para idioma
    $aIdioma = array("Castellano","Inglés","Francés","Alemán");
    // array idiomas seleccionados
    $idiomasSeleccionados = array();

    //nivel de idiomas
    $anivelIdioma = array("B1","B2","C1","C2");
    // niveles seleccionados
    $nivelIdiomaSeleccionado = array();

    // opciones
    $aOpciones = array(
        
    );

    imprimirFormulario();

    function imprimirFormulario() {
        echo "<form>";
        
        // input nombre
        echo "Nombre: <input type=text name=nombre value= >";
        //input e-mail

        //input web

        // textarea-comment

        //genero

        //Idiomas - seleccionar varios a la vez

        //lista desplegable - bebida favorita

        // opcion múltiple

        // enviar

        echo "</form>";
    }
    
?>