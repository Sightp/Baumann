<?php

    require_once "../../conexion.php";
    $conexion=conexion();
    
    $sql = "SELECT REG_ID, REG_NOMBRE FROM REGION";
    $result=mysqli_query($conexion,$sql);
   
    echo '<option selected value="0">--Seleccione una Region--</option>'; 
    while ($fila = mysqli_fetch_array($result)) {
        echo '<option value="'.$fila['REG_ID'].'">'.$fila['REG_NOMBRE'].'</option>';
    };
    
?>
 