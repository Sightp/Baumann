<?php

include('conexionbdd.php');

$rut = $_POST['rut'];
$nombre =$_POST['nombre'];
$paterno = $_POST['paterno'];
$materno =$_POST['materno'];
$ciudad = $_POST['ciudad'];
$direccion =$_POST['direccion'];
$telefono = $_POST['telefono'];
$correo =$_POST['correo'];
$contraseña =$_POST['contraseña'];


$query = "UPDATE CLIENTE SET CLI_NOMBRE='$nombre' ,CLI_PATERNO='$paterno',CLI_MATERNO='$materno',CLI_PASS='$contraseña',CLI_DIRECCION='$direccion',CLI_TELEFONO='$telefono',CLI_CORREO='$correo',ID_CARRO=2,CIU_ID=$ciudad  WHERE CLI_RUT='$rut'";

$result = mysqli_query($conn,$query);

if (!$result){
    die ('fallo');

}
echo "1";








?>