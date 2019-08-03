<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

	$codigo=$_POST['rut'];
	
	
    $sql="DELETE FROM EMPLEADO WHERE EMP_RUT='$codigo'";
    
	echo $result=mysqli_query($conexion,$sql);

?>