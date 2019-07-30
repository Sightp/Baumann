<?php
    session_start();
    require_once "../conexion.php";
    $conexion=conexion();

?>

<table class="table table-hover table-condensed table-bordered" id="tablaproveedor">
    <caption>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">Agregar
            <span class="glyphicon glyphicon-plus"><span>
        </button>
    </caption> 
    <thead>
    <tr>  
        <td>Rut</td>
        <td>Nombre </td>
        <td>Teléfono</td>
        <td>Correo</td>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>
    </thead>
    <tbody>

    <?php
        

        if(isset($_SESSION['consulta'])){
            if($_SESSION['consulta'] > 0){
                $codigoR=$_SESSION['consulta'];
                $sql = "SELECT ABA_ID, ABA_NOMBRE, ABA_TELEFONO, ABA_CORREO
                FROM ABASTECEDOR
                WHERE ABA_ID=$codigoR";
            }else{
                $sql = "SELECT ABA_ID, ABA_NOMBRE, ABA_TELEFONO, ABA_CORREO
                FROM ABASTECEDOR";
            }

        }else{
            $sql = "SELECT ABA_ID, ABA_NOMBRE, ABA_TELEFONO, ABA_CORREO
                FROM ABASTECEDOR";
        }


        $result=mysqli_query($conexion,$sql);

        //INICIO DEL WHILE PARA MOSTRAR DATOS TABLA//
        while ($ver=mysqli_fetch_row($result)) {  
            
            $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3];
            
    ?>

    <tr>  
        <td> <?php echo $ver[0]?></td>
        <td> <?php echo $ver[1]?></td>  
        <td> <?php echo $ver[2]?></td>  
        <td> <?php echo $ver[3]?></td>             
        <td>
            <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos  ?>')"></button>
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


<script type="text/javascript">
$(document).ready(function(){
	$('#tablaproveedor').DataTable({
		language :

		{
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