<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="../../Librerias/Boostrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="../../Librerias/alertifyjs/css/alertify.css" rel="stylesheet">
    <link rel="stylesheet" href="../../Librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="../../Librerias/Boostrap/datatable/bootstrap.min.css">
    <link rel="stylesheet" href="../../Librerias/Boostrap/datatable/dataTables.bootstrap.min.css">

    <script src="../../Librerias/js/jquery-3.2.1.min.js"></script>
    <script src="../../JS/funcioninventario.js"></script>
    <script src="../../Librerias/Boostrap/js/bootstrap.js"></script>
    <script src="../../Librerias/alertifyjs/alertify.js"></script>
    <script src="../../JS/datatable/dataTables.bootstrap.min.js"></script>
    <script src="../../JS/datatable/jquery.dataTables.min.js"></script>
    <title>Inventario</title>
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
            <!--identificador y nombre de productos-->
            Identificador:
            <input type="text" class="form-control" id="idproducto" placeholder="Identificador o numero de modelo" disabled>
            <!--
            Identificador Marca:
            <input type="text" class="form-control" id="idmarca" placeholder="Identificador Marca" required>
            Identificador Sucursal:
            <input type="text" class="form-control" id="idsucursal" placeholder="Identificador de sucursal" required>
            Rut Proovedor:
            <input type="text" class="form-control" id="idproovedor" placeholder="Rut proovedor" required>
            -->
            Nombre:
            <input type="text" class="form-control" id="nombreproducto" placeholder="Nombre Producto" required>
             <!--precio y cantidad de productos-->
            Precio:
            <input type="text" class="form-control" id="precio" placeholder="Precio" required>
            Cantidad:
            <input type="text" class="form-control" id="cantidad" placeholder="Nombre Producto" required>
           
            <!--descripcion inventario-->
            Descripción:
            <input type="text" class="form-control" id="descripcion" placeholder="Descripción" required>                   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">Editar</button>
        </div>
      </div>
    </div>
  </div>
  <!--Modal para agregar datos-->
   
   <div class="modal fade" id="Modal_agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" align="center" id="exampleModalLabel">Agregar producto al inventario</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!--identificador y nombre de productos-->
            Identificador:
            <input type="text" class="form-control" id="idproducto_inventario" placeholder="Identificador o numero de modelo" required>
            Identificador Marca:
            <input type="text" class="form-control" id="idmarca_inventario" placeholder="Identificador Marca" required>
            Identificador Sucursal:
            <input type="text" class="form-control" id="idsucursal_inventario" placeholder="Identificador de sucursal" required>
            Rut Proovedor:
            <input type="text" class="form-control" id="idproovedor_inventario" placeholder="Rut proovedor" required>
            Nombre:
            <input type="text" class="form-control" id="nombreproducto_inventario" placeholder="Nombre Producto" required>
            <!--precio y cantidad de productos-->
            Precio:
            <input type="text" class="form-control" id="precioproducto_inventario" placeholder="Precio" required>
            Cantidad:
            <input type="text" class="form-control" id="cantidadproducto_inventario" placeholder="Cantidad" required>
            <!--descripcion producto-->
            Descripción:
            <input type="text" class="form-control" id="descripcion_producto" placeholder="Descripción" required>       
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">Agregar</button>
        </div>
      </div>
    </div>
  </div>
</body>
<!--llamado de la tabla-->
<script type="text/javascript">
   $(document).ready(function(){
       $('#tabla').load('../../PHP/Trabajador/inventario/tabla.php');
   });
</script>

<script type="text/javascript">
   $(document).ready(function(){
       $('#guardarnuevo').click(function(){
        proid=$('#idproducto_inventario').val();
        marid=$('#idmarca_inventario').val();
        sucid=$('#idsucursal_inventario').val();
        abaid=$('#idproovedor_inventario').val();
        prodescrip=$('#descripcion_producto').val();
        proprecio=$('#precioproducto_inventario').val();
        pronombre=$('#nombreproducto_inventario').val();
        procantidad=$('#cantidadproducto_inventario').val();
        agregardatos(proid,marid,sucid,abaid,prodescrip,proprecio,pronombre,procantidad);
       });

       $('#actualizadatos').click(function(){
        actualizadatos();
       });
   });
</script>
</html>



