<?php
      		$servidor="localhost";
			$usuario="grupo4";
			$password="grupo4optica";
			$bd="grupo4";
        $connect = mysqli_connect($servidor,$usuario,$password,$bd) or die("Error al conectar db".mysqli_error());
        return $connect;



?>
