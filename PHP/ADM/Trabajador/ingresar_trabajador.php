<?php 

	require_once "../../conexion.php";
	$conexion=conexion();

    $rut = $_POST['rut'];
    $nombre =$_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno =$_POST['materno'];
    $ciudad = $_POST['ciudad'];
    $sucursal = $_POST['sucursal'];
    $rol = $_POST['rol'];
    $direccion =$_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo =$_POST['correo'];
    $contraseña = $_POST['contraseña'];


	/*$sql="INSERT into MARCA_PRODUCTO (MAR_ID,MAR_NOMBRE)
                                values ('$n','$a')";*/
 // $sql ="INSERT into CLIENTE (CLI_RUT,CLI_NOMBRE,CLI_PATERNO,CLI_MATERNO,CLI_PASS,CLI_DIRECCION,CLI_TELEFONO,CLI_CORREO,ID_CARRO,CIU_ID) VALUES ('$rut','$nombre','$paterno','$materno','$contraseña','$direccion','$telefono','$correo',2,$ciudad)";


	if(empty($ciudad)){
		$sql="INSERT INTO CLIENTE(CLI_RUT, CLI_NOMBRE, CLI_PATERNO, CLI_MATERNO, CLI_PASS, CLI_DIRECCION, CLI_TELEFONO, CLI_CORREO) 
					  VALUES ('$rut','$nombre','$paterno','$materno','$contraseña','$direccion','$telefono','$correo')";
	}else{
		$sql="INSERT into EMPLEADO (EMP_RUT,ROL_ID,SUC_ID,CIU_ID,EMP_NOMBRE,EMP_PATERNO,EMP_MATERNO,EMP_TELEFONO,EMP_CORREO,EMP_PASS,EMP_DIRECCION) 
                VALUES ('$rut',$rol,$sucursal,$ciudad,'$nombre','$paterno','$materno','$telefono','$correo','$contraseña','$direccion')";
	}

	echo $result=mysqli_query($conexion,$sql);

 ?>