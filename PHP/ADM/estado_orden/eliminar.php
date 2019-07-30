<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

	$codigo=$_POST['codigo'];
	
	
    $sql="DELETE FROM ESTADO_ORDEN WHERE EST_ID=$codigo";
    
	echo $result=mysqli_query($conexion,$sql);

?>