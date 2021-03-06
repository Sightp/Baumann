<?php
require_once"../../conexion.php";
$conexion= conexion();
?>

        
        <table class="table table-hover table-codensed table-bordered" id="tablaload">
            
            <thead class="thead-dark">
            <tr style="font-size:13px;">
             <th>ID</th>
             <th>Nombre</th>
             <th>Marca</th>
             <th>Precio</th>
             <th>Cantidad</th>
             <th>Tipo marco</th>
             <th>Color</th>
             <th>Material</th>
             <th>Genero</th>
             <th>Editar</th>
            </tr>
            </thead>
            <tbody>
            <?php
             $sql="SELECT PRO_ID,PRO_NOMBRE,PRO_PRECIO,PRO_CANTIDAD,PRO_IMAGEN,PRO_MARCO,PRO_MARCOLOR,
             PRO_MATERIAL,PRO_GENERO,PRO_EDAD,MARCA_PRODUCTO.MAR_NOMBRE
                  FROM PRODUCTO
                  JOIN MARCA_PRODUCTO WHERE PRODUCTO.MAR_ID=MARCA_PRODUCTO.MAR_ID";
             $result=mysqli_query($conexion,$sql);
             while($ver=mysqli_fetch_row($result)){
               $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7]."||".$ver[8]."||".$ver[9]."||".$ver[10];
            ?>
            <tr class="tabla-contenido" style="text-transform:uppercase; font-size:12px;">  
                <td><?php echo $ver[0]?></td>
                <td><?php echo $ver[1]?></td>
                <td><?php echo $ver[10]?></td>
                <td><?php echo $ver[2]?></td>
                <td><?php echo $ver[3]?></td>
                <td><?php echo $ver[5]?></td>
                <td><?php echo $ver[6]?></td>
                <td><?php echo $ver[7]?></td>
                <td><?php echo $ver[8]?></td>
                <td>
                  <button class="btn btn-warning" 
                  data-toggle="modal" data-target="#exampleModal" onclick="agregaform('<?php echo $datos?>')"style="margin-right:5px;"><i class="fas fa-pen"style="color:#fff;"></i>
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
