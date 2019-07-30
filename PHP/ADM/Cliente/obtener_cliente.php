<?php

include('conexionbdd.php');
 
// obtengo de la bdd el dato que quiero actualizar 

    $rut =$_POST['rut'];
    $query="SELECT CLI_RUT , CLI_NOMBRE, CLI_PATERNO,CLI_MATERNO,CIU_ID,CLI_DIRECCION,CLI_TELEFONO,CLI_CORREO,CLI_PASS FROM CLIENTE WHERE CLI_RUT = '$rut'";
    $result = mysqli_query($conn,$query);

    if (!$result)
    {
        die ('consulta fallida');

    }
    $json =array();
    while($row = mysqli_fetch_array($result))
    {
        $json[] = array (
            'rut'=> $row['CLI_RUT'],
            'nombre'=>$row['CLI_NOMBRE'],
            'paterno'=> $row['CLI_PATERNO'],
            'materno'=> $row['CLI_MATERNO'],
            'ciudad'=> $row['CIU_ID'],
            'direccion'=>$row['CLI_DIRECCION'],
            'telefono'=> $row['CLI_TELEFONO'],
            'correo'=> $row['CLI_CORREO'],
            'contraseña'=> $row['CLI_PASS']



        );
    }

    $jsonstring =json_encode($json[0]);
    echo $jsonstring;







?>