<?php

   function conexion(){
      $servidor="localhost";
      $usuario="root";
      $pass="";
      $bd="grupo4bd";

      $conexion=mysqli_connect($servidor,$usuario,$pass,$bd);

      return $conexion;
  }
  
?>
