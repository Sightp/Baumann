<?php

    require_once "../../conexion.php";
    $conexion=conexion();
    

    $sql = "SELECT CIU_ID, CIU_NOMBRE
    FROM CIUDAD";

    $result=mysqli_query($conexion,$sql);
   
    echo '<option style="font-size:14px;"selected value="0">--Seleccione--</option>'; 
    while ($fila = mysqli_fetch_array($result)) {
        echo '<option style="font-size:14px;"value="'.$fila['CIU_ID'].'">'.$fila['CIU_NOMBRE'].'</option>';
    };
?>  