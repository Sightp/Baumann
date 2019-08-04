
<?php 
	session_start();
	require_once "../../conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-hover table-condensed table-bordered" id="tabladinamicamarca">
	


		<thead class="thead-dark" >
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre Marca </th>
				<th scope="col">Editar</th>
			</tr>
  		</thead>
		<tbody>

			<?php 

		

				$sql="SELECT MAR_ID,MAR_NOMBRE
						FROM MARCA_PRODUCTO";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".$ver[1];
			 ?>

			<tr class="tabla-contenido" style="text-transform:uppercase;">  
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td>
				<button class="btn btn-warning " data-toggle="modal" data-target="#modalEdicion" style="margin-right:5px;"onclick="agregaform('<?php echo $datos  ?>')"><i class="fas fa-pen"style="color:#fff;"></i></button>
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
	$('#tabladinamicamarca').DataTable({
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