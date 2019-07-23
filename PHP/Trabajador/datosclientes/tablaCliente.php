<?php
session_start();
require_once"../conexion.php";
$conexion= conexion();
?>

<div class="row">
    <div class="col-sm-12">
        <h2>Datos Clientes</h2>
        <table class="table table-hover table-codensed table-bordered" id="tablaload">
            <thead>
            <tr>
             <td>Rut</td>
             <td>Nombre</td>
             <td>A.Paterno</td>
             <td>A.Materno</td>
             <td>Password</td>
             <td>Direccion</td>
             <td>Telefono</td>
             <td>Correo</td>
             <td>Documento</td>
             <td>Editar</td>
             <td>Eliminar</td>
            </tr>
            </thead>
            <tbody>
            <?php
                $sql="SELECT CLI_RUT, CLI_NOMBRE, CLI_PATERNO, CLI_MATERNO, CLI_PASS,
                CLI_DIRECCION, CLI_TELEFONO, CLI_CORREO, CLI_DOCUMENTO FROM cliente ";
   
             $result=mysqli_query($conexion,$sql);
             while($ver=mysqli_fetch_row($result)){
               $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7]."||".$ver[8];
            ?>
            <tr>
                <td><?php echo $ver[0]?></td>
                <td><?php echo $ver[1]?></td>
                <td><?php echo $ver[2]?></td>
                <td><?php echo $ver[3]?></td>
                <td><?php echo $ver[4]?></td>
                <td><?php echo $ver[5]?></td>
                <td><?php echo $ver[6]?></td>
                <td><?php echo $ver[7]?></td>
                <td><?php echo $ver[8]?></td>
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
