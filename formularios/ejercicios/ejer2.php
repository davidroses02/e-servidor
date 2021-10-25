<?php  

/**
 *   Formulario para crear un currículum que incluya: Campos de texto, grupo de botones de opción, casilla
 *   de verificación, lista de selección única, lista de selección múltiple, botón de validación, botón de
 *   imagen, botón de reset, etc.
 * 
 *   @autor David Rosas
 */

    function clear_data($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    // Ponemos las variables vacios.
    $nombre = $apellidos = $nacionalidad = "";
    $provincia = $localidad = "";
    $gender = $telefono = $correo = $idioma = "";
    $aficiones = "";

    // Para genero creamos un array. -> radio.
    $agender = array("femenino","masculino","otro");
    $genderSeleccionados = array();
    // Creamos un array de idiomas. -> selección múltiple.
    $aidioma = array("Castellano","Inglés","Francés","Alemán");
    $idiomaSeleccionados = array();
?>
  <?php  
    if (true) { ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Nombre:<input type="text" name="nombre" value="<?php echo $nombre;?>">
            Apellidos:<input type="text" name="apellidos" value="<?php echo $apellidos;?>">
            nacionalidad:<input type="text" name="nacionalidad" value="<?php echo $nacionalidad;?>">
            provincia:<input type="text" name="provincia" value="<?php echo $provincia;?>">
            localidad:<input type="text" name="localidad" value="<?php echo $localidad;?>">
            telefono:<input type="text" name="telefono" value="<?php echo $telefono;?>">
            correo:<input type="text" name="correo" value="<?php echo $correo;?>">
                  
           Aficiones/Hobbies:<br/>  
                  <textarea name="aficiones" rows="5" cols="40"><?php echo $aficiones;?></textarea><br/><br/>
           Género:
              <?php
                  foreach ($agender as $clave=>$valor) {
                          $check ="";
                          if ($gender == $valor) {$check = "checked";}
                              echo "<input type=\"radio\" name=\"gender\" value = \"$valor\" $check>$valor";
                  }
                  
               ?>
         Idiomas:<br/>
             <?php
                 foreach ($aidioma as $valor) {
                       $selected =(in_array($valor,$idiomaSeleccionados)) ? 'checked' :''; 
                         echo "<input type =\"checkbox\" name=\"aidioma[]\" value = \"".$valor."\" $selected >". $valor;
                   }
             ?>
         
             </select><br/><br/>
             
             
             <input type="submit" name="submit" value="Submit"><br/><br/>
      </form>
      <?php 
    } 
    
    else {
            echo "<h1>Your Input:</h1>";
            echo $nombre;
            echo "<br/>";
            echo $apellidos;
            echo "<br/>";
            echo $provincia;
            echo "<br/>";
            echo $localidad;
            echo "<br/>";
            echo $provincia;
            echo "<br/>";
            echo $telefono;
            echo "<br/>";
            echo $correo;
            echo "<br/>";
            echo $aficiones;
            echo "<br/>";
            
            
            //Bucle para vehículos seleccionados.
            foreach ($genderSeleccionados as $elemento) {
                echo $elemento."<br/>";
            }
            
            //Bucle para coches seleccionados.
            foreach ($idiomaSeleccionados as $elemento) {
                echo $elemento."<br/>";
            }
        