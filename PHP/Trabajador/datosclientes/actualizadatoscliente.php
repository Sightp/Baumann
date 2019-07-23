<?php
require_once"../conexion.php";
$conexion= conexion();

 $rut=$_POST['rut'];
 $nombre=$_POST['nombre'];
 $apaterno=$_POST['apaterno'];
 $amaterno=$_POST['amaterno'];
 $pass=$_POST['pass'];
 $direc=$_POST['direc'];
 $tel=$_POST['tel'];
 $correo=$_POST['correo'];
 $documento=$_POST['documento'];

 $sql="UPDATE `cliente` SET CLI_NOMBRE='$nombre',CLI_PATERNO='$apaterno',CLI_MATERNO='$amaterno',
                            CLI_PASS='$pass',CLI_DIRECCION='$direc',CLI_TELEFONO='$tel',
                            CLI_CORREO='$correo',CLI_DOCUMENTO='$documento' WHERE CLI_RUT='$rut'";

 echo $result=mysqli_query($conexion,$sql);
?>