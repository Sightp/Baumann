<?php

    require_once "../conexion.php";
    $conexion=conexion();
    
    $region = $_POST['region'];
    $sql = "SELECT CIUDAD.CIU_ID, CIUDAD.CIU_NOMBRE FROM CIUDAD WHERE CIUDAD.REG_ID='$region'";
    $result=mysqli_query($conexion,$sql);
   
    echo '<option selected value="0">--Seleccione--</option>'; 
    while ($fila = mysqli_fetch_array($result)) {
        echo '<option value="'.$fila['CIU_ID'].'">'.$fila['CIU_NOMBRE'].'</option>';
    };
    