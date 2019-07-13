<?php 
		function conexion(){
			$servidor="146.83.194.142";
			$usuario="grupo4";
			$password="grupo4optica";
			$bd="grupo4bd";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>
