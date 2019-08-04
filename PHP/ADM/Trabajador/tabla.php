

<?php 
	session_start();
	require_once "../../conexion.php";
	$conexion=conexion();
 ?>

		<table class="table table-hover table-condensed table-bordered" id="tabladinamicamarca">
		<button class="btn btn-primary" data-toggle="modal" data-target="#modalregistroproveedor">
			<i class="fas fa-plus" style="margin-right:5px;" ></i> Agregar  
		</button>


		<thead class="thead-dark" >
				<tr style="font-size:13px;">
					<th scope="col">RUT</th>
					<th scope="col">Nombre </th>
					<th scope="col">Apellido</th>
					<th scope="col">Ciudad</th>
					<th scope="col">Sucursal </th>
					<th scope="col">Rol</th>
					<th scope="col">Telefono</th>
					<th scope="col">Editar</th>
					<th scope="col">Eliminar</th>
				</tr>
 		 </thead>

		<tbody>

            <?php 
            
			/*
                $sql="SELECT CLI_RUT , CLI_NOMBRE, CLI_PATERNO,CLI_MATERNO,CIUDAD.CIU_NOMBRE,CLI_DIRECCION,CLI_TELEFONO,CLI_CORREO,CLI_PASS FROM CLIENTE ,CIUDAD
 ";
                
              */ 
		
                $sql="SELECT EMP_RUT,EMP_NOMBRE ,EMP_PATERNO,EMP_MATERNO,CIUDAD.CIU_NOMBRE ,SUCURSAL.SUC_NOMBRE ,ROL.ROL_TIPO ,EMP_DIRECCION ,EMP_TELEFONO ,EMP_CORREO,EMP_PASS,EMPLEADO.CIU_ID 
                FROM EMPLEADO 
                JOIN CIUDAD ON CIUDAD.CIU_ID=EMPLEADO.CIU_ID
                JOIN SUCURSAL ON SUCURSAL.SUC_ID =EMPLEADO.SUC_ID
                JOIN ROL ON ROL.ROL_ID=EMPLEADO.ROL_ID";
             
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 
                    //$datos=$ver[0]."||".$ver[1];
                    $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7]."||".$ver[8]."||".$ver[9]."||".$ver[10]."||".$ver[11];
			 ?>
        <tr class="tabla-contenido" style="text-transform:uppercase;">  
				<td><?php echo $ver[0] ?></td> <!-- RUT -->
                <td><?php echo $ver[1] ?></td><!-- NOMBRE -->
                <td><?php echo $ver[2] ?></td><!-- RUT -->
                <td><?php echo $ver[4] ?></td><!-- RUT -->
                <td><?php echo $ver[5] ?></td><!-- RUT -->
                <td><?php echo $ver[6] ?></td><!-- RUT -->
                <td><?php echo $ver[8] ?></td><!-- RUT -->

				<td>
					<button class="btn btn-warning " data-toggle="modal" data-target="#modaleditarproveedor" onclick="agregaform('<?php echo $datos ?>')"> <i class="fas fa-pen"style="color:#fff;"></i></button>	
			    </td>
				<td>
				<button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $ver[0] ?>')"><i class="fas fa-times"></i> </button>
				</td>
			</tr>
			<?php 
		}
			 ?>
			 		</tbody>

		</table>


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