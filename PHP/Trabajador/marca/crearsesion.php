<?php
    session_start();

    $codigo=$_POST['valor'];

    $_SESSION['consulta']=$codigo;
    echo $codigo;

?>