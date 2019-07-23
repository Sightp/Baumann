<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="../../Librerias/Boostrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="../../Librerias/alertifyjs/css/alertify.css" rel="stylesheet">
    <link rel="stylesheet" href="../../Librerias/alertifyjs/css/themes/default.css">
    <link href="../../Librerias/select2/css/select2.css" rel="stylesheet">
    <link rel="stylesheet" href="../../Librerias/Boostrap/datatable/bootstrap.min.css">
    <link rel="stylesheet" href="../../Librerias/Boostrap/datatable/dataTables.bootstrap.min.css">

    
    <script src="../../Librerias/js/jquery-3.2.1.min.js"></script>
    <script src="../../JS/funcionActualizacliente.js"></script>
    <script src="../../Librerias/Boostrap/js/bootstrap.js"></script>
    <script src="../../Librerias/alertifyjs/alertify.js"></script>
    <script src="../../Librerias/select2/js/select2.js"></script>
    <script src="../../JS/datatable/dataTables.bootstrap.min.js"></script>
    <script src="../../JS/datatable/jquery.dataTables.min.js"></script>
    

    <title>Datos Clientes</title>
</head>
<body>
    
    <div class="container">
      <div id="tabla"></div>
    </div>



<!-- MODAL PARA EDITAR DATOS-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" align="center" id="exampleModalLabel">Editar datos actuales del inventario</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!--datos clientes-->
            <input type="text" class="form-control" id="rut" placeholder="Rut" disabled>
            Nombre:
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
            Apellido Paterno:
            <input type="text" class="form-control" id="apaterno" placeholder="Apellido paterno" required>
            Apellido Materno:
            <input type="text" class="form-control" id="amaterno" placeholder="Apellido materno" required>
            Contraseña:
            <input type="text" class="form-control" id="pass" placeholder="Contraseña" required>
             <!--para contactar a cliente-->
            Direccion:
            <input type="text" class="form-control" id="direc" placeholder="Direccion" required>
            Telefono:
            <input type="text" class="form-control" id="tel" placeholder="Telefono" required>
            Correo:
            <input type="text" class="form-control" id="correo" placeholder="Correo" required>
            <!--documento cliente-->
            Documento:
            <input type="text" class="form-control" id="documento" placeholder="Documento" required>                   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">Editar</button>
        </div>
      </div>
    </div>
  </div>
  
</body>
<!--llamado de la tabla-->
<script type="text/javascript">
   $(document).ready(function(){
       $('#tabla').load('../../PHP/Trabajador/datosclientes/tablaCliente.php');
   });
</script>

<script type="text/javascript">
   $(document).ready(function(){
       $('#actualizadatos').click(function(){
        actualizadatos();
       });
   });
</script>
</html>
