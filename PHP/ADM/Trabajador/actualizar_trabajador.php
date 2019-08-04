<?php 

require_once "../../conexion.php";
	$conexion=conexion();

	$rut=$_POST['rut'];
    $nombre=$_POST['nombre'];
    $paterno=$_POST['paterno'];
    $materno=$_POST['materno'];
    $ciudad=$_POST['ciudad'];
    $sucursal=$_POST['sucursal'];
    $rol=$_POST['rol'];

    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $pass=$_POST['contraseña'];


	$sql="UPDATE EMPLEADO SET EMP_NOMBRE='$nombre' , EMP_PATERNO='$paterno',EMP_MATERNO='$materno',EMP_TELEFONO='$telefono',EMP_CORREO='$correo',EMP_PASS='$pass',EMP_DIRECCION='$direccion',ROL_ID=$rol,SUC_ID=$sucursal,CIU_ID=$ciudad  WHERE EMP_RUT='$rut'";
	echo $result=mysqli_query($conexion,$sql);

?>