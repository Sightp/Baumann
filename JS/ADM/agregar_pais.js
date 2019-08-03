
function agregardatos(codigo,nombre){

	cadena="codigo=" + codigo + 
            "&nombre=" + nombre;

	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/crud_pais/agregar_pais.php",
		data:cadena,
		success:function(r){
			console.log(r);
			if(r==1){
				$('#tabla').load('../../PHP/ADM/crud_pais/tabla.php');
				 swal("¡Bien!", "Has hecho clic en el botón :)", "success");
			}else{
                console.log(r);
				alertify.error("Error al agregar el País");
			}
		}
	});

}


// funcion para confirmar eliminacion de marca 
function preguntarSiNo(codigo){
	alertify.confirm('Eliminar País', '¿Esta seguro de eliminar este País?', 
					function(){ eliminarDatos(codigo) }
                , function(){ alertify.error('Cancelado')});
}


// funcion para eliminar datos

function eliminarDatos(codigo){

	cadena="codigo=" + codigo;
	console.log(codigo);
		$.ajax({
			type:"POST",
			url:"../../PHP/ADM/crud_pais/eliminar_pais.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('../../PHP/ADM/crud_pais/tabla.php');
					alertify.success("País eliminado con éxito!");
				}else{
					alertify.error("Error al eliminar el País seleccionado");
				}
			}
		});
}


// funcion para llenar el formulario al editar 
function agregaform(datos){

	d=datos.split('||');

	$('#id_pais2').val(d[0]);
    $('#nombre_pais2').val(d[1]);

}

function actualizaDatos(){

  

	codigo=$('#id_pais2').val();
    nombre=$('#nombre_pais2').val();


	cadena= "codigo=" + codigo +
            "&nombre=" + nombre;
			

	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/crud_pais/actualizar_pais.php",
		data:cadena,
		success:function(r){
			console.log(r);
			console.log('jshdshd');
			if(r==1){
				$('#tabla').load('../../PHP/ADM/crud_pais/tabla.php');
				alertify.success("País actualizado con éxito");
			}else{
				alertify.error("Error al editar el País");
			}
		}
	});

}

