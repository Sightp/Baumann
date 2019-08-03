<?php 
	require_once "../../conexion.php";
	$conexion=conexion();
	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
	
	$sql="INSERT INTO ABASTECEDOR(ABA_NOMBRE, ABA_ID, ABA_TELEFONO,ABA_CORREO) 
	VALUES ('$nombre','$codigo','$telefono','$correo')";
	
	echo $result=mysqli_query($conexion,$sql);
 ?>