<?php
  session_start();
  unset($_SESSION['consulta']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../Librerias/Boostrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="../../Librerias/select2/css/select2.css" rel="stylesheet"> 

    <script src="../../Librerias/js/jquery-3.2.1.min.js"></script>
    <script src="../../Librerias/Boostrap/js/bootstrap.js"></script>
    <script src="../../Librerias/select2/js/select2.js"></script>
    <script src="../../JS/ADM/agregar_region.js"></script>
    <link rel="stylesheet" type="text/css" href="../../Librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../../Librerias/alertifyjs//css/alertify.css">
    <script src="../../Librerias/alertifyjs/alertify.js"></script>


    <title>Administrar Regiones</title>
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
        </div>

      
        <!--BARRA BUSCADORA-->
        <div id="buscador"></div>

        <div class="row">
                <div class="col-lm-7">
                        <h2>Regiones Actuales</h2>
                </div>
            
                <div id="tabla"></div>
        </div>
    </div>
<!-- MODAL PARA AGREGAR DATOS-->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" align="center" id="exampleModalLabel">Agregar nueva región</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <!--DATOS QUE SEÁN AGREGADOS-->
                Codigo Región:
                <input type="text" class="form-control" id="codigo" placeholder="Código">
                Nombre Región:
                <input type="text" id="nombre"class="form-control" placeholder="Nombre Región:">
                Seleccionar País:
                <select class="form-control" id="pais">
                  <option>Estado 1</option>
                </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal" id="agregarnuevo">Agregar</button>
            </div>
          </div>
        </div>
      </div>

  <!-- MODAL PARA EDITAR DATOS-->
  <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" align="center" id="exampleModalLabel">Editar región</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            <!--DATOS DE ORDEN QUE SERÁN EDITADOS-->
            Codigo Región:
            <input type="text" class="form-control"  id="codigou" placeholder="Código" disabled>
            Nombre Región:
            <input type="text" class="form-control"  id="nombreu" placeholder="Nombre Región:">
            Seleccionar País:
            <select class="form-control" id="paisu">
              <option>Estado 1</option>
            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizardatos">Editar</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

<!--SCRIP PARA CARGAR LA TABLA-->
<script type="text/javascript">
    $(document).ready(function (){
        $('#tabla').load('../../PHP/ADM/tabla.php');
        $('#buscador').load('../../PHP/ADM/buscador.php');
    });

</script>

<!--LENAR PAIS AGREGAR-->
<script language="JavaScript" type="text/JavaScript">
    $(document).ready(function(){
            $("#pais").load('../../PHP/ADM/llenarpais.php');
            $("#paisu").load('../../PHP/ADM/llenarpais.php');
    });
</script>

<!--LENAR PAIS AGREGAR-->
<script language="JavaScript" type="text/JavaScript">
    $(document).ready(function(){
            $("#agregarnuevo").click(function(){
              codigo=$('#codigo').val();
              nombre=$('#nombre').val();
              pais=document.getElementById("pais").value;
              agregardatos(codigo,nombre,pais);
            });
            $("#actualizardatos").click(function(){
            actualizadatos();
            });  

    });
</script>