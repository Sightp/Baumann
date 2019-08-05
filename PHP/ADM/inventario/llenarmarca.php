<?php

    require_once "../../conexion.php";
    $conexion=conexion();
    

    $sql = "SELECT MAR_ID, MAR_NOMBRE
    FROM MARCA_PRODUCTO";

    $result=mysqli_query($conexion,$sql);
   
    echo '<option style="font-size:14px;" selected value="0" >--Seleccione--</option>'; 
    while ($fila = mysqli_fetch_array($result)) {
        echo '<option style="font-size:14px;"value="'.$fila['MAR_ID'].'">'.$fila['MAR_NOMBRE'].'</option>';
    };
?>  
