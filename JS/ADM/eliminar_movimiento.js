

function preguntarSiNo(codigo){
    alertify.confirm('Eliminar Datos', '¿Seguro desea eliminar el movimiento? Recuerde que será imposible recupearar luego. ', 
    function(){ eliminarDatos(codigo) }
    , function(){ alertify.error('Eliminación cancelada')});

}


function eliminarDatos(codigo){
    cadena="codigo=" + codigo;
        
	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/movimientos/eliminar.php",
		data:cadena,
		success:function(r){
			if(r==1){
                $('#tabla').load('../../PHP/ADM/movimientos/tabla.php');
				alertify.success("Se elimino correctamente el movimiento");
			}else{
				alertify.error("Fallo al eliminar la región");
			}
		}
    });
}