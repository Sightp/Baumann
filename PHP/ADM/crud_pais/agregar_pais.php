<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];

	
	$sql="INSERT INTO PAIS(PA_ID, PA_NOMBRE) 
	VALUES ('$codigo','$nombre')";
	
	echo $result=mysqli_query($conexion,$sql);
 ?>