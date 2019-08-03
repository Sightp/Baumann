
function agregardatos(rut,rol,sucursal,ciudad,nombre,paterno,materno,telefono,correo,contraseña,direccion)        
{

    cadena="rut=" + rut +
            "&rol=" + rol+
            "&sucursal=" + sucursal+
            "&ciudad=" + ciudad +
            "&nombre=" + nombre+
            "&paterno=" + paterno +
            "&materno=" + materno +
            "&telefono=" + telefono + 
            "&correo=" + correo + 
            "&contraseña=" + contraseña +
            "&direccion=" + direccion             
            ;

	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/Trabajador/ingresar_trabajador.php",
		data:cadena,
		success:function(r){
			console.log(r);
			if(r==1){
				$('#tabla').load('../../PHP/ADM/Trabajador/tabla.php');
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
    alertify.confirm('Eliminar Datos', '¿Seguro desea eliminar el Trabajador? Recuerde que esto implicara eliminar todas las ciudades asociadas al Trabajador. ', 
    function(){ eliminarDatos(rut) }
    , function(){ alertify.error('Eliminación cancelada')});

}

function eliminarDatos(rut){
    cadena="rut=" + rut;
    console.log(cadena);
        
	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/Trabajador/eliminartrabajador.php",
		data:cadena,
		success:function(r){
			if(r==1){
                $('#tabla').load('../../PHP/ADM/Trabajador/tabla.php');
				alertify.success("Se elimino correctamente el Trabajador");
			}else{
				alertify.error("Fallo al eliminar el Trabajador");
			}
		}
    });
}
