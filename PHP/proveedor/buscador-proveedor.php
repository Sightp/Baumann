<?php
include('conexionbdd.php');

$search = $_POST ['search'];
if (!empty($search))
{
    $query = "SELECT ABA_ID,ABA_NOMBRE,ABA_TELEFONO,ABA_CORREO FROM abastecedor where ABA_ID = '$search%'";
    mysqli_query($connection,$query);

    if (!$result){
        die('error'.mysqli_error($connection));
    }
    $json = array();
    while($row = mysqli_fetch_array($result))
    {
        $json[]= array 
        (
            'nombre'=> $row['ABA_NOMBRE'],
            'rut' => $row['ABA_ID'],
            'telefono'=> $row['ABA_TELEFONO'],
            'correo'=> $row['ABA_CORREO']

        );

    }
   $jsonstring = json_encode($json);
   echo $jsonstring;
}




?>