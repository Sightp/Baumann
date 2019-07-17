<?php

include('conexionbdd.php');
 
if (isset($_POST['rut'])){
    
    $rut =$_POST['rut'];
    $query ="DELETE FROM abastecedor WHERE ABA_ID = '$rut'";

    $result = mysqli_query($conn,$query);
    if (!$result)
    {
       // die('query Failed');
        die($rut);
    }
    echo "rut eliminado";

}



?>