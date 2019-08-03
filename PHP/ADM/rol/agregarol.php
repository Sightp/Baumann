<?php
require_once"../../conexion.php";
$conexion= conexion();

 $id=$_POST['idrol'];
 $descripcion=$_POST['desc_rol'];

 $sql="INSERT INTO rol(ROL_ID,ROL_TIPO) 
 VALUES ('$id','$descripcion')";

 echo $result=mysqli_query($conexion,$sql);
?>