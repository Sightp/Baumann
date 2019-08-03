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
    <title>OpticaX</title>
</head>
<?php
  include("PHP/Login/conexion.php");
  $sql = "SELECT * FROM PRODUCTO";
  $result = mysqli_query($connect,$sql);
?>
<body>
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
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:600px;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Archivos/images/1D.jpg" alt="First slide" style="height:600px;">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Archivos/images/2D.jpg" alt="Second slide" style="height:600px;">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Archivos/images/3D.jpg" alt="Third slide" style="height:600px;">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="mx-auto indexwelcome" style="width:60%; heigth=400px;">
        <h4 class="separaseccion  text-center" >"Bienvenido a
          OpticaX nuestro principal objetivo es que encuentres los lentes  ideales para ti y tu familia"
        </h4>
      </div>

    <div class="separaseccion row container mx-auto">
      <div class="col-4">
        <hr>
      </div>
      <div class="pdes col-4 text-center"><h2>PRODUCTOS DESTACADOS</h2></div>
      <div class="col-4">
        <hr>
      </div>
    </div>




      <div class="indexgrid">
        <div class="index-item">
        <?php if($row = mysqli_fetch_assoc($result))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="#" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div>
        </div>
        <div class="index-item"><?php if($row = mysqli_fetch_assoc($result))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="#" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div></div>
        <div class="index-item"><?php if($row = mysqli_fetch_assoc($result))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="#" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div></div>
        <div class="index-item"><?php if($row = mysqli_fetch_assoc($result))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="#" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div></div>
        <div class="index-item"><?php if($row = mysqli_fetch_assoc($result))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="#" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div></div>
        <div class="index-item"><?php if($row = mysqli_fetch_assoc($result))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="#" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div></div>
      </div>
      

  <hr style="border:0.5px solid gray; widht:80%;" class="container separaseccion">

      <div class="container row mx-auto separaseccion indexcara" style="height: 200px;">
        <div class="col">
           <p class="text-center"><i class="fas fa-search  fa-4x mt-5"></i></p> 
          <p class="text-center lead">Sabemos lo que estas buscando</p>
        </div>
          <div class="col"style="">
              <p class="text-center"><i class="fas fa-user-graduate fa-4x mt-5"></i></p> 
            <p class="text-center lead">Profesionales capacitados para realizar la mejor atencion</p></div>
          <div class="col">
              <p class="text-center"><i class="fas fa-handshake fa-4x mt-5"></i></i></p> 
            <p class="text-center lead">Confianza y compromiso </p>
          </div>
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