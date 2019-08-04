<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

	$rut=$_POST['rut'];
    $nombre=$_POST['nombre'];
    $paterno=$_POST['paterno'];
    $materno=$_POST['materno'];
    $ciudad=$_POST['ciudad'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $pass=$_POST['contraseña'];


	$sql="UPDATE CLIENTE SET CLI_NOMBRE ='$nombre',CLI_PATERNO='$paterno',CLI_MATERNO=' $materno' ,CLI_PASS='$pass',CLI_DIRECCION='$direccion',CLI_TELEFONO='$telefono',CLI_CORREO='$correo',CIU_ID=$ciudad WHERE CLI_RUT='$rut'";
	echo $result=mysqli_query($conexion,$sql);

?>