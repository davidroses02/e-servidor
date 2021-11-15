<?php
    /**
     * Subida de un archivo al servidor. 
     *
     * Script respuesta al formulario de carga de archivo al servidor.
     * @author  dwes
     *
     * */   
    define("DIRUPLOAD",'upload/');
    define("MAXSIZE",200000);

    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $allowedFormat = array("image/gif","image/jpeg","image/jpg","image/jpeg","image/x-png","image/png");
    
    //Obtenemos la extensión, podriamos hacerlo tambien con pathinfo() más adelante.
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);

    if (( $_FILES["file"]["size"] < MAXSIZE) && 
          in_array($_FILES["file"]["type"],$allowedFormat)  && 
          in_array($extension, $allowedExts)) {

        if ($_FILES["file"]["error"] > 0)    {
             echo "Return Code: " . $_FILES["file"]["error"] . "<br/>";
        }else {
            $filename = $_FILES["file"]["name"];
            /* Conviene renombrar la imagen bien con el id de una base de datos o con un 
            identificador único
            */
           // $filename = time() . $filename; 
            $filename = uniqid().'.'.pathinfo($filename,PATHINFO_EXTENSION);
            echo "Fichero subido <br>";
            if (file_exists(DIRUPLOAD .$filename )) {
                echo $_FILES["file"]["name"] . " el fichero ya existe. ";
             }
            else {  
                move_uploaded_file($_FILES["file"]["tmp_name"], DIRUPLOAD . $filename);
                echo "Guardado en: " . DIRUPLOAD . $filename;
                echo "<br>";
                // mostrar las imagenes subidas en el directorio uploadç
                $dir = opendir(DIRUPLOAD);
                while ($archivo = readdir($dir)){
                    if ($archivo != "." && $archivo != ".."){
                        echo "<img src='".DIRUPLOAD.$archivo."' width='100' height='100'/>" . "<br/>" ;
                    }
                }
             }
            echo "<br/>";
            echo '<a href="javascript:history.back()">Volver</a>';
      }
  }else {
    echo "Fichero no válido";
}



?>