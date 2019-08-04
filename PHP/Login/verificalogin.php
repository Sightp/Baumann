<?php
include("conexion.php");
$user = $_POST['usuario'];
$pass = $_POST['password'];

$sql = "SELECT EMP_CORREO, EMP_PASS,ROL_ID FROM EMPLEADO";
$selectresult = mysqli_query($connect,$sql);


if (mysqli_num_rows($selectresult)>0) {
    while($row = mysqli_fetch_assoc($selectresult)){
        if (strcasecmp($row["EMP_CORREO"],$user)==0 && $row["EMP_PASS"]==$pass) {
            if ($row["ROL_ID"]==1) {
                header("Location:../../HTML/Laboratorio/Estado.html");
            }
            if ($row["ROL_ID"]==2) {
                header("Location:../../HTML/Trabajador/inventario1.html");
            }
            if ($row["ROL_ID"]==3) {
                header("Location:../../HTML/ADM/admin_index.html");
            }
        }
    }
}
$sql = "SELECT CLI_CORREO, CLI_PASS FROM CLIENTE ";
$selectresult = mysqli_query($connect,$sql);

if (mysqli_num_rows($selectresult)>0) {
    while($row = mysqli_fetch_assoc($selectresult)){
        if (strcasecmp($row["CLI_CORREO"],$user)==0 && $row["EMP_PASS"]==$pass) { 
            echo "CLIENTE";
        }
    }
}



?>