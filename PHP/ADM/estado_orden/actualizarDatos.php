<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];

	
	$sql="UPDATE ESTADO_ORDEN SET EST_DESCRIPCION ='$nombre' WHERE EST_ID='$codigo'";
	echo $result=mysqli_query($conexion,$sql);
