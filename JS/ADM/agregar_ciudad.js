function agregardatos(codigo,nombre,region){

	cadena="codigo=" + codigo + 
            "&nombre=" + nombre +
            "&region=" + region;
        
           
        
	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/crud_ciudad/agregar_ciudad.php",
		data:cadena,
		success:function(r){
			if(r==1){
                $('#tabla').load('../../PHP/ADM/crud_ciudad/tabla.php');
				swal("¡Bien!", "Has hecho clic en el botón :)", "success");
			}else{
				alertify.error("Fallo al agregar la Ciudad");
			}
		}
    });
}

//TRASPASAR DATOS AL MODAL Y SELECCIONAR EL PAIS AUTOMATICAMENTE//
function agregaform(datos){
   
    d=datos.split('||');
    $('#codigou').val(d[0]);
    $('#nombreu').val(d[1]);
    $("#regionu option[value='"+d[2]+"']").attr("selected", true);
}

//ACTUALIZAR DATOS DE REGION//
function actualizadatos(){

    codigo=$('#codigou').val();
    nombre=$('#nombreu').val();
    region=document.getElementById("regionu").value;

    cadena="codigo=" + codigo + 
            "&nombre=" + nombre +
            "&region=" + region;

    $.ajax({
        type:"POST",
        url:"../../PHP/ADM/crud_ciudad/actualizar_ciudad.php",
        data:cadena,
        success:function(r){
        if(r==1){
                $('#tabla').load('../../PHP/ADM/crud_ciudad/tabla.php');
                alertify.success("Se actualizaron los datos correctamente de Ciudad");
                }else{
                    alertify.error("Fallo al actualizar los datos de Ciudad");
                }
            }
    });   

}

function preguntarSiNo(codigo){
    alertify.confirm('Eliminar Datos', '¿Seguro desea eliminar la Ciudad? Recuerde que esto implicará eliminar todas las Ciudades asociadas a la Región. ', 
    function(){ eliminarDatos(codigo) }
    , function(){ alertify.error('Eliminación cancelada')});

}

function eliminarDatos(codigo){
    cadena="codigo=" + codigo;
    console.log(cadena);
        
	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/crud_ciudad/eliminar_ciudad.php",
		data:cadena,
		success:function(r){
			if(r==1){
                $('#tabla').load('../../PHP/ADM/crud_ciudad/tabla.php');
				alertify.success("Se elimino correctamente la Ciudad");
			}else{
				alertify.error("Fallo al eliminar la Ciudad");
			}
		}
    });
}


