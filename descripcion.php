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
    <a style="color:white;" class="navbar-brand" href="#"> OpticaX</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav justify-content-end">
        <a style="color:white;"class="nav-item nav-link active" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        <a style="color:white"class="nav-item nav-link " href="productos.php">Productos</a>
        <a style="color:white;"class="nav-item nav-link " href="HTML/Usuario/Registro.html">Registro</a>
        <a style="color:white;"class="nav-item nav-link loginbutton " href="PHP/Login/login.php">Iniciar Sesion</a>
      </div>
    </div>
  </nav>
  <div class="bannerpro ">
                <img src="Archivos/images/ban2.jpg" width="100%" height="500" class="bannerimg">
                <div class="bannerprocenter" style="color:black;"> DESCRIPCIÒN PRODUCTO </div>
              </div>

    <?php if($row = mysqli_fetch_assoc($consulta)):
    
    $idmarca = $row["MAR_ID"];
    $sql1 = "SELECT * FROM MARCA_PRODUCTO WHERE MAR_ID = $idmarca ";
    $consulta1 = mysqli_query($connect,$sql1);
    if($rowmarca = mysqli_fetch_assoc($consulta1)):
    
    
    
    ?>
  <div class="container mt-5">
    <div class="row">
        <div class="col">
          <div class="contieneimg"><img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"];?>" alt="" height="350px;" class="imagendes">
        </div>
        </div>
        <div class="col">
        <table class="table ">
        <thead class="thead-dark">
    <tr>
      <th scope="col">Caracteristicas del producto</th> 
    </tr>
  </thead>
        <tbody>
        <tr>
        <th> <?php echo "Nombre = ".$row["PRO_NOMBRE"]; ?></th>
           
        </tr>
        <tr>
            <th><?php echo "Marca = ".$rowmarca["MAR_NOMBRE"]; ?></th>
        </tr>
        <tr>
            <th><?php echo "Stock = ".$row["PRO_CANTIDAD"]; ?></th>
        </tr>
        <tr>
            <th><?php echo "Marco = ".$row["PRO_MARCO"]; ?></th>
        </tr>
        <tr>
            <th><?php echo "Color del marco = ".$row["PRO_MARCOLOR"]; ?></th>
        </tr>
        <tr>
            <th><?php echo "Material = ".$row["PRO_MATERIAL"]; ?></th>
        </tr>
        <tr>
           <th><?php echo "Genero = ".$row["PRO_GENERO"]; ?></th> 
        </tr>
        <tr>
            <th><?php echo "Edad = ".$row["PRO_EDAD"]; ?></th>
        </tr>
        <tr>
            <th class="text-primary"><?php echo "Valor = CLP $".$row["PRO_PRECIO"]; ?></th>
        </tr>
        <tr>
        <th class="text-success"><a  href=""> Agregar al Carro <i class="fas fa-shopping-cart"></i></a></th>
        </tr>
        </tbody>
        </table>
        </div>
    </div>
    <?php 
  endif;
  endif;
  ?>
  </div>
  <footer class="row mt-5 mx-auto " style="height: 200px;width: 100%;">
          <div class="col"></div>
          <div class="col mt-3">
            <p class="text-center"></p> 
            <p class="lead text-light text-center">OpticaX</p>
          </div>
            <div class="col mt-3"style="">
              
            </div>
            <div class="col mt-3">
            <h3 class="lead mt-2 text-light font-weight-bold ">Contacto</h3>
            <hr class="hrfooter">
              <p class=" font-weight-light text-light"><i class="fas fa-phone text-light fa-lg"></i> Telefono</p>
              <p class=" font-weight-light text-light"><i class="fas fa-map-marker-alt text-light fa-lg"></i> Ubicacion</p>
               
            </div>
            <div class="col mt-3">
            <h3 class="lead mt-2 text-light font-weight-bold">Redes Sociales</h3>
            <hr class="hrfooter">
              <p class="font-weight-light text-light"><i class="fab fa-facebook text-light fa-lg "> </i> Facebook</p> 
               <p class="font-weight-light text-light"><i class="fab fa-instagram text-light fa-lg "> </i> Instagram</p>
            </div>
      </footer>
</body>
</html>