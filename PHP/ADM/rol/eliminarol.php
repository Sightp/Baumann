<?php
  require_once"../../conexion.php";
  $conexion= conexion();
  
  $id=$_POST['proid'];
  $sql="DELETE FROM rol WHERE ROL_ID='$id'";
  echo $result=mysqli_query($conexion,$sql);
?>