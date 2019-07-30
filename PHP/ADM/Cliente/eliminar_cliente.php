<?php

include('conexionbdd.php');
 
if (isset($_POST['rut_cliente'])){
    
    $rut =$_POST['rut_cliente'];
    $query ="DELETE FROM CLIENTE WHERE CLI_RUT = '$rut'";

    $result = mysqli_query($conn,$query);
    if (!$result)
    {
       // die('query Failed');
        die($rut);
    }
    echo "rut eliminado";

}



?>