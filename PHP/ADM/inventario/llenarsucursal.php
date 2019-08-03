<?php

    require_once "../../conexion.php";
    $conexion=conexion();
    

    $sql = "SELECT SUC_ID, SUC_NOMBRE
    FROM SUCURSAL";

    $result=mysqli_query($conexion,$sql);
   
    echo '<option style="font-size:14px;" selected value="0" >--Seleccione--</option>'; 
    while ($fila = mysqli_fetch_array($result)) {
        echo '<option style="font-size:14px;"value="'.$fila['SUC_ID'].'">'.$fila['SUC_NOMBRE'].'</option>';
    };
?>  