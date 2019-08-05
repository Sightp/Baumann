<?php
require_once"../../conexion.php";
$conexion= conexion();

 $id=$_POST['idroles'];
 $descripcion=$_POST['descripcion_rol'];

 $sql="UPDATE `ROL` SET `ROL_TIPO`='$descripcion'
                              WHERE ROL_ID='$id'";

 echo $result=mysqli_query($conexion,$sql);
?>
