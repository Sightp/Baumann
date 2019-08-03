<?php

    require_once "../../conexion.php";
    $conexion=conexion();
    $ciudad = $_POST['ciudad'];
    $sql = "SELECT SUC_ID, SUC_NOMBRE FROM SUCURSAL WHERE SUCURSAL.CIU_ID='$ciudad'";
    $result=mysqli_query($conexion,$sql);
   
    echo '<option selected value="0">--Seleccione una Sucursal--</option>'; 
    while ($fila = mysqli_fetch_array($result)) {
        echo '<option value="'.$fila['SUC_ID'].'">'.$fila['SUC_NOMBRE'].'</option>';
    };
    
?>
 