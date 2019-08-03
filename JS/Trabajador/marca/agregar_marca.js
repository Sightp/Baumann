





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
		url:"../../PHP/Trabajador/marca/actualizar_marca.php",
		data:cadena,
		success:function(r){
			console.log(r);
			console.log('jshdshd');
			if(r==1){
				$('#tabla').load('../../PHP/Trabajador/marca/tabla.php');
				alertify.success("Marca actualizada con exito");
			}else{
				alertify.error("Error al editar la Marca");
			}
		}
	});

}

