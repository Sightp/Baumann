
function agregardatos(rut,nombre,paterno,materno,ciudad,direccion,telefono,correo,contraseña){

    cadena="rut=" + rut +
            "&nombre=" + nombre+
            "&paterno=" + paterno +
            "&materno=" + materno +
            "&ciudad=" + ciudad +
            "&direccion=" + direccion +
            "&telefono=" + telefono + 
            "&correo=" + correo + 
            "&contraseña=" + contraseña;

	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/Cliente/agregar_cliente.php",
		data:cadena,
		success:function(r){
			console.log(r);
			if(r==1){
				$('#tabla').load('../../PHP/ADM/Cliente/tabla.php');
				 $('#buscador').load('../../PHP/ADM/marca/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
                console.log(r);
                console.log("se mete al else");
				alertify.error("Fallo el servidor fgfg:(");
			}
		}
	});

}



function preguntarSiNo(rut){
    alertify.confirm('Eliminar Datos', '¿Seguro desea eliminar el Cliente? Recuerde que esto implicara eliminar todas las ciudades asociadas al Cliente. ', 
    function(){ eliminarDatos(rut) }
    , function(){ alertify.error('Eliminación cancelada')});

}

function eliminarDatos(rut){
    cadena="rut=" + rut;
    console.log(cadena);
        
	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/Cliente/eliminarcliente.php",
		data:cadena,
		success:function(r){
			if(r==1){
                $('#tabla').load('../../PHP/ADM/Cliente/tabla.php');
				alertify.success("Se elimino correctamente el cliente");
			}else{
				alertify.error("Fallo al eliminar el Cliente");
			}
		}
    });
}