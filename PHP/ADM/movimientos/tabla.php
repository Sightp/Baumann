<?php
    
    require_once "../../conexion.php";
    $conexion=conexion();

?>

<table class="table table-hover table-condensed table-bordered" id="tablaDinamicaLoad">
  <thead>
    <tr>  
        <td>Código Movimiento</td>
        <td>Cantidad</td>
        <td>Tipo Movimiento</td>
        <td>ID Producto</td>
        <td>Nombre Producto</td>
        <td>Hora</td>
        <td>Fecha</td>
        <td>Eliminar</td>
    </tr>
  </thead>
  <tbody>

<?php 
     
        $sql = "SELECT MOVIMIENTO.MOV_ID, MOVIMIENTO.MOV_CANT, MOVIMIENTO.PRO_ID, PRODUCTO.PRO_NOMBRE, HOUR(MOVIMIENTO.MOV_FECHA),MINUTE(MOVIMIENTO.MOV_FECHA),SECOND(MOVIMIENTO.MOV_FECHA),DAY(MOVIMIENTO.MOV_FECHA),MONTH(MOVIMIENTO.MOV_FECHA),YEAR(MOVIMIENTO.MOV_FECHA)
        FROM MOVIMIENTO
        JOIN PRODUCTO ON MOVIMIENTO.PRO_ID=PRODUCTO.PRO_ID";
    


   
    $result=mysqli_query($conexion,$sql);

    //INICIO DEL WHILE PARA MOSTRAR DATOS TABLA//
    while ($ver=mysqli_fetch_row($result)) {

     $hora=$ver[4].":".$ver[5].":".$ver[6];
     $fecha=$ver[7]."/".$ver[8]."/".$ver[9];
     
     
     if($ver[1]>0){
        $resultado="Entrada";
     }else{
        $resultado="Salida";
     }   
   
    ?> 
 
        <tr>  
            <td><?php echo $ver[0]?></td>
            <td><?php echo $ver[1]?></td>
            <td><?php echo $resultado?></td>
            <td><?php echo $ver[2]?></td>
            <td><?php echo $ver[3]?></td>
            <td><?php echo $hora?></td>
            <td><?php echo $fecha?></td>
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
