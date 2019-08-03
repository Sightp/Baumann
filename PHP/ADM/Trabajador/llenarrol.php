<?php

    require_once "../../conexion.php";
    $conexion=conexion();
    
    $sql = "SELECT ROL_ID, ROL_TIPO FROM ROL";
    $result=mysqli_query($conexion,$sql);
   
    echo '<option selected value="0">--Seleccione un Rol--</option>'; 
    while ($fila = mysqli_fetch_array($result)) {
        echo '<option value="'.$fila['ROL_ID'].'">'.$fila['ROL_TIPO'].'</option>';
    };
    
?>
 