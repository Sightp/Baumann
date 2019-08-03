<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../CSS/login.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<script src="../../Librerias/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../Librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../../Librerias/alertifyjs/css/themes/default.css">
    <script src="../../Librerias/alertifyjs/alertify.js"></script>
</head>
<body>

<?php //MODULO PARA VERIFICAR QUE LOS CAMPOS NO SE ENCUENTREN VACIOS
	$nombreUsuario ="";
	$contraseña ="";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["usuario"])){
			echo "<script> alertify.error('Ingrese un nombre de usuario'); </script>";
		}
		else
		$nombreUsuario = $_POST["usuario"];
		if(empty($_POST["password"]))
		echo "<script> alertify.error('Ingrese una contraseña'); </script>";
		include("verificalogin.php");
	}
	
?>

	<div class="login-box">
		<form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
		<a class="login-foto" href="../../index.php"></a>
			<div class="login-formulario-box">
				<h2>Optica <p>X</p></h2>
				<div class="login-nombre">
					<label for="nombre">Nombre de usuario</label>
					<input type="text" id="nombre" placeholder="Inserte su nombre de usuario" name="usuario" value="<?php echo $nombreUsuario?>">
				</div>
				<div class="login-password">
					<label for="password">Contraseña</label>
					<input type="password" id="password" name="password" placeholder="Inserte su contraseña" >
				</div>
				<div class="login-send">
					<div class="login-center"><button class="login-button" type="submit">Iniciar sesión</button></div>
					
				</div>
				
			</div>
			
		</form>
	</div>
</body>
</html>
