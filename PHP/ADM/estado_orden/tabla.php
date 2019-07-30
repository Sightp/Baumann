<?php
    
    require_once "../../conexion.php";
    $conexion=conexion();

?>

<table class="table table-hover table-condensed table-bordered" id="tablaDinamicaLoad">
    <caption>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregar">Agregar
            <span class="glyphicon glyphicon-plus"><span>
        </button>
    </caption> 
  <thead>
    <tr>  
        <td>Código Estado Orden</td>
        <td>Descripción</td>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>
  </thead>
  <tbody>

<?php 
     
        $sql = "SELECT ESTADO_ORDEN.EST_ID, ESTADO_ORDEN.EST_DESCRIPCION 
        FROM ESTADO_ORDEN";
    
   
    $result=mysqli_query($conexion,$sql);

    //INICIO DEL WHILE PARA MOSTRAR DATOS TABLA//
    while ($ver=mysqli_fetch_row($result)) {

    $datos= $ver[0]."||".$ver[1];

    ?> 
 
        <tr>  
            <td><?php echo $ver[0]?></td>
            <td><?php echo $ver[1]?></td>
            <td>
            <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEditar" onclick="agregaform('<?php echo $datos  ?>')">
            </button>
            </td>
            <td>
                <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $ver[0]?>')"></button>
            </td>
        </tr>
    
  <?php   
        }//FIN WHILE//
  ?>
</tbody>
</table>



<script language="JavaScript" type="text/JavaScript">
    $(document).ready(function(){
        $("#tablaDinamicaLoad").dataTable({
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
