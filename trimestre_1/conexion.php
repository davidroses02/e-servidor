<?php

  
  # Conexión a la base de datos
  $conn = mysqli_connect( 'localhost', 'root', '', 'test');
  echo "<pre>";
  print_r($conn);
  
  # Sentencia para insertar registros en la base de datos
  $insert = "insert into empleado( nombre, edad, telefono) values( 'pedro', '25', '666444212')";

  # Instrucción que ejecuta el insert anterior en la base de datos PRUEBAS
  $return = mysqli_query ( $conn, $insert);

  # Mostramos por pantalla el resultado del insert
  print_r( ( $return));

  # Cerramos conexión
  mysqli_close( $conn);
