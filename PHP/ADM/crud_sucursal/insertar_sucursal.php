<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
    $ciudad=$_POST['ciudad'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $direccion=$_POST['direccion'];
	
	$sql="INSERT INTO SUCURSAL(SUC_ID, SUC_NOMBRE, CIU_ID, SUC_TELEFONO, SUC_CORREO, SUC_DIRECCION) 
	VALUES ('$codigo','$nombre','$ciudad','$telefono','$correo','$direccion')";
	
	echo $result=mysqli_query($conexion,$sql);

 ?>