<?php

    require_once "../conexion.php";
    $conexion=conexion();
    

    $sql = "SELECT EST_ID, EST_DESCRIPCION
    FROM ESTADO_ORDEN";

    $result=mysqli_query($conexion,$sql);
   
    echo '<option selected value="0">--Seleccione--</option>'; 
    while ($fila = mysqli_fetch_array($result)) {
        echo '<option value="'.$fila['EST_ID'].'">'.$fila['EST_DESCRIPCION'].'</option>';
    };
?>  