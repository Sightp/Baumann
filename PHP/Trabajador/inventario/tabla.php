<?php
require_once"../conexion.php";
$conexion= conexion();
?>

<div class="row">
    <div class="col-sm-12">
        <h2>Inventario</h2>
        <table class="table table-hover table-codensed table-bordered" id="tablaload">
            <caption>
            <button class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="#Modal_agregar">AGREGAR</button>
            </caption>
            <thead>
            <tr>
             <td>ID</td>
             <td>Nombre</td>
             <td>Precio</td>
             <td>Cantidad</td>
             <td>Descripción</td>
             <td>Editar</td>
             <td>Eliminar</td>
            </tr>
            </thead>
            <tbody>
            <?php
             $sql="SELECT pro_id,pro_nombre,pro_precio,pro_cantidad,pro_descripcion
                  FROM producto";
             $result=mysqli_query($conexion,$sql);
             while($ver=mysqli_fetch_row($result)){
               $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4];
            ?>
            <tr>
                <td><?php echo $ver[0]?></td>
                <td><?php echo $ver[1]?></td>
                <td><?php echo $ver[2]?></td>
                <td><?php echo $ver[3]?></td>
                <td><?php echo $ver[4]?></td>
                <td>
                  <button class="btn btn-warning glyphicon glyphicon-pencil" 
                  data-toggle="modal" data-target="#exampleModal" onclick="agregaform('<?php echo $datos?>')">
                </button>
                </td>
                <td>
                  <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntar('<?php echo $ver[0]?>')">
                </button>
                </td>
            </tr>
            <?php
             }
            ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('#tablaload').DataTable({
    language:{
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
  });
});
</script>