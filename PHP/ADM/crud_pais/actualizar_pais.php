<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];

	$sql="UPDATE PAIS SET PA_NOMBRE ='$nombre' WHERE PA_ID='$codigo'";
	echo $result=mysqli_query($conexion,$sql);

?>