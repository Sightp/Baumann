<?php
        $usuario = "root";
        $password = "";
        $db = "grupo4bd";
        $servidor = "localhost";
        $connect = mysqli_connect($servidor,$usuario,$password,$db) or die("Error al conectar db".mysqli_error());
        return $connect;


?>