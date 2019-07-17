<?php 

	require_once "../conexion.php";
	$conexion=conexion();

	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
	$pais=$_POST['pais'];
	
	$sql="UPDATE REGION SET PA_ID='$pais', REG_NOMBRE ='$nombre' WHERE REG_ID='$codigo'";
	echo $result=mysqli_query($conexion,$sql);

?>