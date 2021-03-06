// funcion para agregar datos 


function agregardatos(codigo,nombre,telefono,correo){

	cadena="codigo=" + codigo + 
            "&nombre=" + nombre +
            "&telefono="+ telefono +
            "&correo="+ correo;

	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/crud_proveedor/agregar_proveedor.php",
		data:cadena,
		success:function(r){
			console.log(r);
			if(r==1){
				$('#tabla').load('../../PHP/ADM/crud_proveedor/tabla.php');
				alertify.success("Proveedor agregado!");
			}else{
                console.log(r);
                console.log("se mete al else");
				alertify.error("Error al agregar el proveedor");
			}
		}
	});

}


// funcion para confirmar eliminacion de marca 
function preguntarSiNo(codigo){
	alertify.confirm('Eliminar Proveedor', '¿Esta seguro de eliminar este Proveedor?', 
					function(){ eliminarDatos(codigo) }
                , function(){ alertify.error('Cancelado')});
}


// funcion para eliminar datos

function eliminarDatos(codigo){

	cadena="codigo=" + codigo;

		$.ajax({
			type:"POST",
			url:"../../PHP/ADM/crud_proveedor/eliminar_proveedor.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('../../PHP/ADM/crud_proveedor/tabla.php');
					alertify.success("Proveedor eliminado con éxito!");
				}else{
					alertify.error("Error al eliminar el proveedor seleccionado");
				}
			}
		});
}


// funcion para llenar el formulario al editar 
function agregaform(datos){

	d=datos.split('||');

	$('#rut_proveedor2').val(d[0]);
    $('#nombre_proveedor2').val(d[1]);
    $('#telefono_proveedor2').val(d[2]);
	$('#correo_proveedor2').val(d[3]);

	
}


function actualizaDatos(){

  

	codigo=$('#rut_proveedor2').val();
    nombre=$('#nombre_proveedor2').val();
    telefono=$('#telefono_proveedor2').val();
	correo=$('#correo_proveedor2').val();


	cadena= "codigo=" + codigo +
            "&nombre=" + nombre +
            "&telefono="+ telefono +
            "&correo="+ correo;
			

	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/crud_proveedor/actualizar_proveedor.php",
		data:cadena,
		success:function(r){
			console.log(r);
			console.log('jshdshd');
			if(r==1){
				$('#tabla').load('../../PHP/ADM/crud_proveedor/tabla.php');
				alertify.success("Proveedor actualizado con éxito");
			}else{
				alertify.error("Error al editar el Proveedor");
			}
		}
	});

}