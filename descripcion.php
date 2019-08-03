<!DOCTYPE html>
<html lang="es">
<head>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d3c1b7ea74.js"></script>
    <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:300|Oswald&display=swap');
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/productos.css">
    <title>OpticaX</title>
</head>
<body>
<?php
    include("PHP/Login/conexion.php");
    $valor = $_GET['PRO_ID'];
    $sql = "SELECT * FROM PRODUCTO WHERE PRO_ID = $valor ";
    $consulta = mysqli_query($connect,$sql);

?>
<nav class="navbar navbar-expand-lg indexnav sticky-top"  >
    <a class="navbar-brand" href="#"> OpticaX</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav justify-content-end">
        <a style="color:white;"class="nav-item nav-link active" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        <a style="color:white"class="nav-item nav-link " href="productos.php">Productos</a>
        <a style="color:white;"class="nav-item nav-link " href="#">Nosotros</a>
        <a style="color:white;"class="nav-item nav-link loginbutton " href="PHP/Login/login.php">Iniciar Sesion</a>
      </div>
    </div>
  </nav>

    <?php if($row = mysqli_fetch_assoc($consulta))?>
    <div class="row">
        <div class="col">
        <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"];?>" alt="">
        </div>
        <div class="col">
        <p><?php echo $row["PRO_NOMBRE"]."<br>";?></p>
        <p class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></p>
        <p class=""><?php echo "Descripcion = ".$row["PRO_DESCRIPCION"];?></p>
        </div>
    </div>
</body>
</html>