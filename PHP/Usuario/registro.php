<?php 

	require_once "../conexion.php";
	$conexion=conexion();

	$rut=$_POST['rut'];
	$nombre=$_POST['nombre'];
	$apellidoP=$_POST['apellidoP'];
	$apellidoM=$_POST['apellidoM'];
	$pass=$_POST['pass'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$ciudad=$_POST['ciudad'];


	if(empty($ciudad)){
		$sql="INSERT INTO CLIENTE(CLI_RUT, CLI_NOMBRE, CLI_PATERNO, CLI_MATERNO, CLI_PASS, CLI_DIRECCION, CLI_TELEFONO, CLI_CORREO) 
					  VALUES ('$rut','$nombre','$apellidoP','$apellidoM','$pass','$direccion','$telefono','$correo')";
	}else{
		$sql="INSERT INTO CLIENTE(CLI_RUT, CLI_NOMBRE, CLI_PATERNO, CLI_MATERNO, CLI_PASS, CLI_DIRECCION, CLI_TELEFONO, CLI_CORREO, CIU_ID) 
					  VALUES ('$rut','$nombre','$apellidoP','$apellidoM','$pass','$direccion','$telefono','$correo','$ciudad')";
	}
	

	echo $result=mysqli_query($conexion,$sql);

 ?>