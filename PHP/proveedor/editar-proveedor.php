<?php

include('conexionbdd.php');

$rut = $_POST['rut'];
$description =$_POST['description'];
$telefono = $_POST['telefono'];
$correo =$_POST['correo'];

$query = "UPDATE abastecedor SET ABA_NOMBRE='$description' , ABA_TELEFONO='$telefono',ABA_CORREO='$correo' WHERE ABA_ID='$rut'";

$result = mysqli_query($conn,$query);

if (!$result){
    die ('fallo');

}
echo "actualizado";








?>