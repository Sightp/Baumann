
<?php 
	require_once "../conexion.php";
	$conexion=conexion();
	$codigo=$_POST['codigo'];

	$sql="DELETE FROM MARCA_PRODUCTO where MAR_ID='$codigo'";
	echo $result=mysqli_query($conexion,$sql);
 ?>