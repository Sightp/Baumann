<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
	$region=$_POST['region'];
	
	$sql="INSERT INTO CIUDAD(CIU_ID, CIU_NOMBRE, REG_ID) 
	VALUES ('$codigo','$nombre','$region')";
	
	echo $result=mysqli_query($conexion,$sql);

 ?>