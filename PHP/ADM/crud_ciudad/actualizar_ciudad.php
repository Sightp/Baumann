<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
	$region=$_POST['region'];
	
	$sql="UPDATE CIUDAD SET REG_ID='$region', CIU_NOMBRE ='$nombre' WHERE CIU_ID='$codigo'";
	echo $result=mysqli_query($conexion,$sql);

?>