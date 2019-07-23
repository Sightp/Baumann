<?php
  require_once"../conexion.php";
  $conexion= conexion();
  
  $id=$_POST['cliid'];
  $sql="DELETE FROM cliente WHERE CLI_RUT='$id'";
  echo $result=mysqli_query($conexion,$sql);
?>