<?php

    require_once "../../conexion.php";
    $conexion=conexion();
    

    $sql = "SELECT PA_ID, PA_NOMBRE
    FROM PAIS";

    $result=mysqli_query($conexion,$sql);
   
    echo '<option style="font-size:14px;"selected value="0">--Seleccione--</option>'; 
    while ($fila = mysqli_fetch_array($result)) {
        echo '<option style="font-size:14px;"value="'.$fila['PA_ID'].'">'.$fila['PA_NOMBRE'].'</option>';
    };
?>  