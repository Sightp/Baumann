<?php
  require_once"../conexion.php";
  $conexion= conexion();
  
  $id=$_POST['proid'];
  $sql="DELETE FROM producto WHERE PRO_ID='$id'";
  echo $result=mysqli_query($conexion,$sql);
?>