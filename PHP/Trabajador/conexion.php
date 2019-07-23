<?php

   function conexion(){
      $servidor="localhost";
      $usuario="root";
      $pass="";
      $bd="optica";

      $conexion=mysqli_connect($servidor,$usuario,$pass,$bd);

      return $conexion;
  }
  
?>