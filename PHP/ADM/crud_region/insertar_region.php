<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
	$pais=$_POST['pais'];
	
	$sql="INSERT INTO REGION(REG_ID, REG_NOMBRE, PA_ID) 
	VALUES ('$codigo','$nombre','$pais')";
	
	echo $result=mysqli_query($conexion,$sql);

 ?>