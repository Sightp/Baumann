<?php

    require_once "../../conexion.php";
    $conexion=conexion();
    

    $sql = "SELECT EST_ID, EST_DESCRIPCION
    FROM ESTADO_ORDEN
    WHERE ESTADO_ORDEN.EST_ID='1' OR ESTADO_ORDEN.EST_ID='6'
    OR ESTADO_ORDEN.EST_ID='7' OR ESTADO_ORDEN.EST_ID='5' OR ESTADO_ORDEN.EST_ID='8'";

    $result=mysqli_query($conexion,$sql);
   
    echo '<option selected value="0">--Seleccione--</option>'; 
    while ($fila = mysqli_fetch_array($result)) {
        echo '<option value="'.$fila['EST_ID'].'">'.$fila['EST_DESCRIPCION'].'</option>';
    };
?>  