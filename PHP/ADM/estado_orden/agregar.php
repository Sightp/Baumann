<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

	$codigo=$_POST['codigo'];
	$nombre=$_POST['descripcion'];
	
	$sql="INSERT INTO ESTADO_ORDEN(EST_ID, EST_DESCRIPCION) 
	VALUES ('$codigo','$nombre')";
	
	echo $result=mysqli_query($conexion,$sql);

 ?>