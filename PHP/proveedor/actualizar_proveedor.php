<?php 
	require_once "../conexion.php";
	$conexion=conexion();
	$id=$_POST['codigo'];
	$n=$_POST['nombre'];
    $telefono=$_POST['telefono'];
	$correo=$_POST['correo'];

	$sql="UPDATE ABASTECEDOR set ABA_NOMBRE='$n',ABA_TELEFONO='$telefono',ABA_CORREO='$correo' where ABA_ID='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>