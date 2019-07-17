<?php

include('conexionbdd.php');
 
// obtengo de la bdd el dato que quiero actualizar 

    $rut =$_POST['rut'];
    $query="SELECT * FROM abastecedor WHERE ABA_ID = '$rut'";
    $result = mysqli_query($conn,$query);

    if (!$result)
    {
        die ('consulta fallida');

    }
    $json =array();
    while($row = mysqli_fetch_array($result))
    {
        $json[] = array (
            'rut'=> $row['ABA_ID'],
            'description'=>$row['ABA_NOMBRE'],
            'telefono'=> $row['ABA_TELEFONO'],
            'correo'=> $row['ABA_CORREO']


        );
    }

    $jsonstring =json_encode($json[0]);
    echo $jsonstring;







?>