<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
    $ciudad=$_POST['ciudad'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $direccion=$_POST['direccion'];
	
	$sql="UPDATE SUCURSAL SET CIU_ID='$ciudad', SUC_NOMBRE ='$nombre',SUC_TELEFONO ='$telefono',
							SUC_CORREO ='$correo', SUC_DIRECCION ='$direccion'  WHERE SUC_ID='$codigo'";
	echo $result=mysqli_query($conexion,$sql);
	

?>