function agregardatos(codigo,descripcion){

	cadena="codigo=" + codigo + 
            "&descripcion=" + descripcion;
        
	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/estado_orden/agregar.php",
		data:cadena,
		success:function(r){
			if(r==1){
                $('#tabla').load('../../PHP/ADM/estado_orden/tabla.php');
				alertify.success("Se agrego correctamente la región");
			}else{
				alertify.error("Fallo al agregar la región");
			}
		}
    });
}


//TRASPASAR DATOS AL MODAL Y SELECCIONAR EL PAIS AUTOMATICAMENTE//
function agregaform(datos){
   
    d=datos.split('||');
    $('#codigou').val(d[0]);
    $('#nombreu').val(d[1]);
}

//ACTUALIZAR DATOS//
function actualizadatos(){

    codigo=$('#codigou').val();
    nombre=$('#nombreu').val();
  

    cadena="codigo=" + codigo + 
            "&nombre=" + nombre;

    $.ajax({
        type:"POST",
        url:"../../PHP/ADM/estado_orden/actualizarDatos.php",
        data:cadena,
        success:function(r){
        if(r==1){
                $('#tabla').load('../../PHP/ADM/estado_orden/tabla.php');
                alertify.success("Se actualizaron los datos correctamente de estado orden");
                }else{
                    alertify.error("Fallo al actualizar los datos de estado orden");
                }
            }
    });   

}

function preguntarSiNo(codigo){
    alertify.confirm('Eliminar Datos', '¿Seguro desea eliminar estado orden? Recuerde que esto implicara eliminar los datos asociados.', 
    function(){ eliminarDatos(codigo) }
    , function(){ alertify.error('Eliminación cancelada')});

}

function eliminarDatos(codigo){
    cadena="codigo=" + codigo;
  
        
	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/estado_orden/eliminar.php",
		data:cadena,
		success:function(r){
			if(r==1){
                $('#tabla').load('../../PHP/ADM/estado_orden/tabla.php');
				alertify.success("Se elimino correctamente el estado de orden");
			}else{
				alertify.error("Fallo al eliminar estado de orden");
			}
		}
    });
}