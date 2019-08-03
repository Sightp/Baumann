<?php
include("conexion.php");
$user = $_POST['usuario'];
$pass = $_POST['password'];

$sql = "SELECT EMP_NOMBRE, EMP_PASS,ROL_ID FROM EMPLEADO";
$selectresult = mysqli_query($connect,$sql);


if (mysqli_num_rows($selectresult)>0) {
    while($row = mysqli_fetch_assoc($selectresult)){
        if ($row["EMP_NOMBRE"] == $user && $row["EMP_PASS"]==$pass) {
            if ($row["ROL_ID"]==1) {
                echo "TRABAJADOR";
            }
            if ($row["ROL_ID"]==2) {
                echo "ENCARGADO OPTICA";
            }
        }
    }
}
$sql = "SELECT CLI_NOMBRE, CLI_PASS FROM CLIENTE ";
$selectresult = mysqli_query($connect,$sql);

if (mysqli_num_rows($selectresult)>0) {
    while($row = mysqli_fetch_assoc($selectresult)){
        if ($row["CLI_NOMBRE"] == $user && $row["CLI_PASS"]==$pass) {
            echo "CLIENTE";
        }
    }
}

else
echo "ERRRRRRRORRRRR";



?>