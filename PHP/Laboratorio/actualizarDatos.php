<?php 

	require_once "../conexion.php";
	$conexion=conexion();

	$codigo=$_POST['codigo'];
	$estado=$_POST['estado'];

	
	$sql="UPDATE ORDEN SET EST_ID='$estado' WHERE ORD_ID='$codigo'";
	echo $result=mysqli_query($conexion,$sql);

?>