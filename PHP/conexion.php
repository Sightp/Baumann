<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="grupo4bd";
		  
			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
			$con=mysqli_set_charset($conexion,'utf8');

			return $conexion;
		}

 ?>
