<?php
require_once"../../conexion.php";
$conexion= conexion();
?>


        <table class="table table-hover table-codensed table-bordered" id="tablaload">
        <button class="btn btn-primary" data-toggle="modal" data-target="#Modal_agregar"><i class="fas fa-plus" style="margin-right:5px;" ></i> Agregar</button>
            <thead class="thead-dark" >
                  <tr >
                      <th scope="col">ID</th>
                      <th scope="col">Descripción</th>
                      <th scope="col">Editar</th>
                      <th scope="col">Eliminar</th>
                  </tr>
            </thead>
            <tbody>
            <?php
             $sql="SELECT rol_id, rol_tipo
                  FROM rol";
             $result=mysqli_query($conexion,$sql);
             while($ver=mysqli_fetch_row($result)){
               $datos=$ver[0]."||".$ver[1];
            ?>
            <tr class="tabla-contenido">
                <td><?php echo $ver[0]?></td>
                <td><?php echo $ver[1]?></td>
                <td>
                  <button class="btn btn-warning" 
                  data-toggle="modal" data-target="#exampleModal" onclick="agregaform('<?php echo $datos?>')"><i class="fas fa-pen"style="color:#fff;"></i>
                </button>
                </td>
                <td>
                  <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntar('<?php echo $ver[0]?>')"><i class="fas fa-times"></i>
                </button>
                </td>
            </tr>
            <?php
             }
            ?>
            </tbody>
        </table>


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