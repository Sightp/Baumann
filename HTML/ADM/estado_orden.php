<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../Librerias/Boostrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/styleLab.css" rel="stylesheet"> 
    <link href="../../Librerias/select2/css/select2.css" rel="stylesheet"> 

    <script src="../../Librerias/js/jquery-3.2.1.min.js"></script>
    <script src="../../Librerias/Boostrap/js/bootstrap.js"></script>
    <script src="../../Librerias/select2/js/select2.js"></script>
    <script src="../../JS/ADM/estado_orden.js"></script>

    


    <script src="../../Librerias/datatable/jquery.dataTables.min.js"></script>
        
   
    <link href="../../Librerias/datatable/dataTables.bootstrap.min.css" rel="stylesheet"> 
    <script src="../../Librerias/datatable/dataTables.bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../../Librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../../Librerias/alertifyjs/css/alertify.css">
    <script src="../../Librerias/alertifyjs/alertify.js"></script>


    <title>Estado Orden</title>
</head>
<body>

    <div class="container">

        <!--ROW PARA LA PRIMERA SECCION DE LA VENTANA-->
        <div class="row">
            <div class="col-lg-12">
              <div align="right">
                  <span class="cerrar-sesion">Cerrar Sesión</span> 
                  <img src="img/salir-opcion.svg" width="45px">
              </div>
            </div>

            <div align="center">
                <span class="titulos">Estado Ordenes</span>
            </div>
        </div>

      
      
        <div class="row">
                <div class="col-lm-7">
                        <h2>Estado Ordenes Actuales</h2>
                </div>
                <div id="tabla"></div>
        </div>
    </div>


  <!-- MODAL PARA AGREGAR DATOS-->
  <div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" align="center" id="exampleModalLabel">Agregar Estado Orden</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!--DATOS DE ORDEN QUE SERÁN EDITADOS-->
            Codigo estado orden:
            <input type="text" class="form-control"  id="codigo" placeholder="Código" >
            Descripcion estado orden:
            <input type="text" class="form-control"  id="nombre" placeholder="Descripcion Orden:" >
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="agregarnuevo">Agregar</button>
        </div>
      </div>
    </div> 
    </div> 

  <!-- MODAL PARA EDITAR DATOS-->
  <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" align="center" id="exampleModalLabel">Actualizar Estado Orden</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            <!--DATOS DE ORDEN QUE SERÁN EDITADOS-->
            Codigo Orden:
            <input type="text" class="form-control"  id="codigou" placeholder="Código" disabled>
            Nombre Producto:
            <input type="text" class="form-control"  id="nombreu" placeholder="Nombre Producto:">
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizardatos">Actualizar</button>
        </div>
      </div>
    </div> 
    </div> 
    

   


</body>
</html>




<!--SCRIP PARA CARGAR LA TABLA-->
<script type="text/javascript">
  $(document).ready(function (){
      $('#tabla').load('../../PHP/ADM/estado_orden/tabla.php');
  });
</script>

<!--AGREGAR-->
<script language="JavaScript" type="text/JavaScript">
    $(document).ready(function(){
            $("#agregarnuevo").click(function(){
              codigo=$('#codigo').val();
              descripcion=$('#nombre').val();
              agregardatos(codigo,descripcion);
            });
            $("#actualizardatos").click(function(){
            actualizadatos();
            });

    });
</script>
