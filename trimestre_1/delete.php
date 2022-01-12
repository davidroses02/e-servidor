<?php

  
  # Conexión a la base de datos
  $conn = mysqli_connect( 'localhost', 'root', '', 'test');

  # Sentencia para borrar registros de la base de datos
  $delete = "delete from empleado where id = 1";

  # ejecutamos la sentencia contra la base de datos PRUEBAS
  $return = mysqli_query( $conn, $delete);

  # Mostramos el resultado por pantalla
  print_r( $return);

  # Cerramos la conexión
  mysqli_close( $conn);