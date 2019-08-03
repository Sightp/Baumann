<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

	$n=$_POST['codigo'];
	$a=$_POST['nombre'];


	$sql="INSERT into MARCA_PRODUCTO (MAR_ID,MAR_NOMBRE)
								values ('$n','$a')";
	echo $result=mysqli_query($conexion,$sql);

 ?>