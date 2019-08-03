<?php
    
    require_once "../../conexion.php";
    $conexion=conexion();

?>

<table class="table table-hover table-condensed table-bordered" id="tablaDinamicaLoad">
<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregar" style="margin-bottom:5px;">
    <i class="fas fa-plus" style="margin-right:5px;" ></i>Agregar
</button>
   
  <thead class="thead-dark">
    <tr>  
        <th scope="col">Código Estado Orden</th>
        <th scope="col">Descripción</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
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
                <button class="btn btn-warning " data-toggle="modal" data-target="#modalEditar" style="margin-right:5px;"onclick="agregaform('<?php echo $datos  ?>')"><i class="fas fa-pen"style="color:#fff;"></i></button>
            </td>
            <td>
            <button class="btn btn-danger " onclick="preguntarSiNo('<?php echo $ver[0]?>')"><i class="fas fa-times"></i></button>
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
