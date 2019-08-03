<?php

    require_once "../../conexion.php";
    $conexion=conexion();
    

    $sql = "SELECT REG_ID, REG_NOMBRE
    FROM REGION";

    $result=mysqli_query($conexion,$sql);
   
    echo '<option style="font-size:14px;" selected value="0" >--Seleccione--</option>'; 
    while ($fila = mysqli_fetch_array($result)) {
        echo '<option style="font-size:14px;"value="'.$fila['REG_ID'].'">'.$fila['REG_NOMBRE'].'</option>';
    };
?>  