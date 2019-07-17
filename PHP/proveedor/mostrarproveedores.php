<?php

    include('conexionbdd.php');

    // Muestro todos los datos que hay en la bdd 

    $query = 'SELECT ABA_ID , ABA_NOMBRE, ABA_TELEFONO,ABA_CORREO FROM abastecedor';
    $result =mysqli_query($conn,$query);

    if(!$result)
    {
        die('query falida'.mysql_error($conn));
    }


    $json =array();
    while($row = mysqli_fetch_array($result))
    {
        $json[] =array (
            'rut'=> $row['ABA_ID'],
            'description'=>$row['ABA_NOMBRE'],
            'telefono'=> $row['ABA_TELEFONO'],
            'correo'=>$row['ABA_CORREO']


        );
    }

    $jsonstring =json_encode($json);
    echo $jsonstring;


?>
