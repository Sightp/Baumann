// funcion para agregar datos 


function agregardatos(codigo,nombre){

	cadena="codigo=" + codigo + 
			"&nombre=" + nombre;

	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/marca/insertar_marca.php",
		data:cadena,
		success:function(r){
			console.log(r);
			if(r==1){
				$("#agregarnuevo").prop('disabled', true);

				$('#tabla').load('../../PHP/ADM/marca/tabla.php');
				 $('#buscador').load('../../PHP/ADM/marca/buscador.php');
				alertify.success("Marca agregada con exito");
				$('#formulario1').trigger('reset');
			



			}else{
                console.log(r);
                console.log("se mete al else");
				alertify.error("Fallo el servidor fgfg:(");
			}
		}
	});

}

// funcion para confirmar eliminacion de marca 
function preguntarSiNo(codigo){
	alertify.confirm('Eliminar Marca', '¿Esta seguro de eliminar esta Marca?', 
					function(){ eliminarDatos(codigo) }
                , function(){ alertify.error('Se cancelo')});
}


// funcion para eliminar datos

function eliminarDatos(codigo){

	cadena="codigo=" + codigo;

		$.ajax({
			type:"POST",
			url:"../../PHP/ADM/marca/eliminar_marca.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('../../PHP/ADM/marca/tabla.php');
					alertify.success("Marca eliminada con exito!");
				}else{
					alertify.error("Error al eliminar la Marca seleccionada");
				}
			}
		});
}


// funcion para llenar el formulario al editar 
function agregaform(datos){

	d=datos.split('||');

	$('#codigou').val(d[0]);
	$('#nombreu').val(d[1]);

	
}

function actualizaDatos(){


	codigo=$('#codigou').val();
	nombre=$('#nombreu').val();


	cadena= "codigo=" + codigo +
			"&nombre=" + nombre;
			

	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/marca/actualizar_marca.php",
		data:cadena,
		success:function(r){
			console.log(r);
			console.log('jshdshd');
			if(r==1){
				$('#tabla').load('../../PHP/ADM/marca/tabla.php');
				alertify.success("Marca actualizada con exito");
			}else{
				alertify.error("Error al editar la Marca");
			}
		}
	});

}

