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
        array(
            "valor" => 1,
            "literal" => "Opción 1"
        ),
        array(
            "valor" => 2,
            "literal" => "Opción 2"
        ),
        array(
            "valor" => 3,
            "literal" => "Opción 3"
        ),
        array(
            "valor" => 4,
            "literal" => "Opción 4"
        ),
    );

    // Variable para la seleccion multiple
    $multiple = array("Renault", "Mercedes", "Citroen", "Volvos");
    // array con las opciones recogidas
    $multipleSeleccion = array();

    $lprocesaFormulario = FALSE;
    $lError = FALSE;

    //detectamos error en la validación de los datos del formulario
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $lprocesaFormulario = TRUE;

        // validacion name
        if (empty($_POST["name"])) {
            $nameErr = "name is required";
            $lError = TRUE;
        }
        else {
            $name = clear_data($_POST["name"]);
        }

        // validacion e-mail
        if (empty($_POST["email"])) {
            $nameErr = "name is required";
            $lError = TRUE;
        }
        else {
            $email = clear_data($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Formato de correo incorrecto";
                $lError = TRUE;
            }
        }

        // validación URL
        if (empty($_POST["website"])) {
            $websiteErr = "website is required";
            $lError = TRUE;
        } 
        else {
            $website = clear_data($_POST["website"]);
            if (!filter_var($website, FILTER_VALIDATE_URL)) {
                $websiteErr = "Formato de url incorrecto";
                $lError = TRUE;
            }
        }

        //validación comentario
        //$comment = clear_data($comment);

        // validación gender
        if (empty($_POST["gender"])) {
            $genderErr = "Debes elegir un genero";
            $lError = TRUE;
        }
        else {
            $gender = clear_data($_POST["gender"]);
        }

        // idioma diferente al de abajo - aclarar esto
        if (isset($_POST["idioma"])) {
            $aIdioma = $_POST["idioma"]; 
        }

        //lista desplegable - seleccion multiple, solo carga de datos
        if (isset($_POST["anivelIdioma"])) {
            $nivelIdiomaSeleccionado = $_POST["anivelIdioma"];
        }

<<<<<<< HEAD
    function imprimirFormulario() {
        echo "<form>";
        
        // input nombre
        echo "Nombre: <input type=text name=nombre value= >";
        //input e-mail

        //input web

        // textarea-comment

        //genero

        //Idiomas - seleccionar varios a la vez
=======
    }
>>>>>>> c3d6da9e6719d48d0c9366fe9f61a48428964b73

    // Control de la bandera
    if ($lError) {
        $lprocesaFormulario = FALSE;
    }
    
    
?>

<!DOCTYPE html>
<html lang="en">
    <body>0
        <head>
            <style>
                .error {color: #FF0000;}
            </style>
        </head>
    </body>
</html>

<?php 

if (!$lprocesaFormulario) { ?>
    <h1>Validación formulario. PHP</h1>
    <p><span class="error">* Campos requeridos..</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
       Nombre:<input type="text" name="name" value="<?php echo $name;?>">
              <span class="error">*<?php echo $nameErr;?></span><br/><br/>
       email: <input type="text" name="email" value="<?php echo $email;?>">
              <span class="error">* <?php echo $emailErr;?></span><br/><br/>
       URL:   <input type="text" name="website" value="<?php echo $website;?>">
              <span class="error"><?php echo $websiteErr;?></span><br/><br/>
       Commentario:<br/>  
              <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea><br/><br/>
       Género:
          <?php
              foreach ($aGenero as $clave=>$valor) {
                      $check ="";
                      if ($gender == $valor) {$check = "checked";}
                          echo "<input type=\"radio\" name=\"gender\" value = \"$valor\" $check>$valor";
              }
              echo "<span class=\"error\">* $genderErr</span><br/><br/>";
           ?>
     Idiomas:<br/>
         <?php
             foreach ($aIdioma as $valor) {
                   $selected =(in_array($valor,$aIdioma)) ? 'checked' :''; 
                     echo "<input type =\"checkbox\" name=\"aIdioma[]\" value = \"".$valor."\" $selected >". $valor;
               }
         ?>
     <br/><br/>
     Selecciona nivel de Idiomas:
         <select name="combo">
         <?php
               foreach ($anivelIdioma as $valor) {
                     $selected =($nivelIdiomaSeleccionado == $valor['valor']) ? 'selected' :''; 
                       echo "<option value = \"".$valor['valor']."\" $selected >". $valor['literal'] ."</option>";
                 }
         ?>
         </select><br/><br/>
         
         
         <input type="submit" name="submit" value="Submit"><br/><br/>
  </form>
<?php
} // Procesa Formulario
else {
    echo "<h1>Your Input:</h1>";
    echo $name;
    echo "<br/>";
    echo $email;
    echo "<br/>";
    echo $website;
    echo "<br/>";
    echo $comment;
    echo "<br/>";
    echo $gender;
    echo "<br/>";
    
    //Bucle para vehículos seleccionados.
    foreach ($idiomasSeleccionados as $elemento) {
        echo $elemento."<br/>";
    }

    //Bucle para coches seleccionados.
    foreach ($nivelIdiomaSeleccionado as $elemento) {
        echo $elemento."<br/>";
    }
}   