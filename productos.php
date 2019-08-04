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
<?php

  require ("PHP/Login/conexion.php");
  
  $sql = "SELECT * FROM PRODUCTO";
  $sql1 = "SELECT * FROM MARCA_PRODUCTO";
  $sql2 = "SELECT * FROM PRODUCTO";
  $precio = mysqli_query($connect,$sql2);
  $marca = mysqli_query($connect,$sql1);
  $result = mysqli_query($connect,$sql);
  $numerofilas = mysqli_num_rows($result);
  $numeropag = $numerofilas/9;
  $numeroarticulos =9;
  $numeropag = ceil($numeropag);


  


  if(!$_GET){
    header('Location:productos.php?pagina=1');
  }
  $inicio = ($_GET['pagina']-1)*2;
  $consulta = "SELECT * FROM PRODUCTO LIMIT $inicio,$numeroarticulos";
  $articulosfilt = mysqli_query($connect,$consulta);
  
  

?>
<body>

    <!-- HEADER---->
    <nav class="navbar navbar-expand-lg indexnav sticky-top"  >
    <a class="navbar-brand" href="#"> OpticaX</a>
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

  <!-- FINHEADER---->
  
    

    <div class="gridproductos">
      <div class="item-productos">
      <?php if($row = mysqli_fetch_assoc($articulosfilt))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="descripcion.php?PRO_ID=<?php echo $row["PRO_ID"]; ?>" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div></div>
      <div class="item-productos"><?php if($row = mysqli_fetch_assoc($articulosfilt))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="descripcion.php?PRO_ID=<?php echo $row["PRO_ID"]; ?>" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a></div>
</div></div>
      <div class="item-productos"><?php if($row = mysqli_fetch_assoc($articulosfilt))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="descripcion.php?PRO_ID=<?php echo $row["PRO_ID"]; ?>" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a></div>
</div></div>
      <div class="item-productos"><?php if($row = mysqli_fetch_assoc($articulosfilt))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="#" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div></div>
      <div class="item-productos"><?php if($row = mysqli_fetch_assoc($articulosfilt))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="#" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div></div>
      <div class="item-productos"><?php if($row = mysqli_fetch_assoc($articulosfilt))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="#" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div></div>
      <div class="item-productos"><?php if($row = mysqli_fetch_assoc($articulosfilt))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="#" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div></div>
      <div class="item-productos"><?php if($row = mysqli_fetch_assoc($articulosfilt))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="#" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div></div>
      <div class="item-productos"><?php if($row = mysqli_fetch_assoc($articulosfilt))?>
      <div class="card" style="height:300px;">
  <img src="Archivos/images/imagenlentes/<?php echo $row["PRO_IMAGEN"]; ?>" class="card-img-top" alt="..." widht="100%" height="200px">
  <div class="card-body">
    <span><?php echo $row["PRO_NOMBRE"]."<br>";?></span>
    <span class="text-primary"><?php echo "$".$row["PRO_PRECIO"];?></span>
    <a href="#" class="btn text-light" style="float:right;background:rgb(167,66,66);"> <i class="fas fa-shopping-cart"></i> AGREGAR AL CARRO</a>
  </div>
</div></div>
    </div>





<!-- PAGINACION---->
  <div class="text-center container mt-5">
  <ul class="pagination  justify-content-center">
    <li class="page-item
    <?php echo $_GET['pagina']<=1? 'disabled':'' ?>">
      <a class="page-link" href="productos.php?pagina=<?php echo $_GET['pagina']-1 ?>"> Anterior</a>
    </li>

    <?php for($i=0;$i<$numeropag;$i++): ?>

    <li class="page-item 
    <?php echo $_GET['pagina']==$i+1? 'active':'' ?>">
      <a class="page-link " 
      href="productos.php?pagina=<?php echo $i+1; ?>">
      <?php echo $i+1; ?>
      </a>
      </li>
    <?php endfor ?>

    <li class="page-item
    <?php echo $_GET['pagina']>=$numeropag? 'disabled':'' ?>">
      <a class="page-link"
      href="productos.php?pagina=<?php echo $_GET['pagina']+1; ?>">Next</a>
    </li>
  </ul>
</div>
<!-- FIN PAGINACION---->

    
</body>
</html>