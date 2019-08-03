<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
	$id=$_POST['codigo'];
	$n=$_POST['nombre'];


	$sql="UPDATE MARCA_PRODUCTO set MAR_NOMBRE='$n' where MAR_ID='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>