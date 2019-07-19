<?php 
	require_once "../conexion.php";
	$conexion=conexion();
	$id=$_POST['codigo'];
	$n=$_POST['nombre'];


	$sql="UPDATE marca_producto set MAR_NOMBRE='$n' where MAR_ID='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>