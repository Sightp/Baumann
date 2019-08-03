function agregardatos(codigo,nombre,pais){

	cadena="codigo=" + codigo + 
            "&nombre=" + nombre +
            "&pais=" + pais;
        
           
        
	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/crud_region/insertar_region.php",
		data:cadena,
		success:function(r){
			if(r==1){
                $('#tabla').load('../../PHP/ADM/crud_region/tabla.php');
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
    $("#paisu option[value='"+d[2]+"']").attr("selected", true);
}

//ACTUALIZAR DATOS DE REGION//
function actualizadatos(){

    codigo=$('#codigou').val();
    nombre=$('#nombreu').val();
    pais=document.getElementById("paisu").value;

    cadena="codigo=" + codigo + 
            "&nombre=" + nombre +
            "&pais=" + pais;

    $.ajax({
        type:"POST",
        url:"../../PHP/ADM/crud_region/actualizarDatos.php",
        data:cadena,
        success:function(r){
        if(r==1){
                $('#tabla').load('../../PHP/ADM/crud_region/tabla.php');
                alertify.success("Se actualizaron los datos correctamente de región");
                }else{
                    alertify.error("Fallo al actualizar los datos de región");
                }
            }
    });   

}

function preguntarSiNo(codigo){
    alertify.confirm('Eliminar Datos', '¿Seguro desea eliminar región? Recuerde que esto implicara eliminar todas las ciudades asociadas a la región. ', 
    function(){ eliminarDatos(codigo) }
    , function(){ alertify.error('Eliminación cancelada')});

}

function eliminarDatos(codigo){
    cadena="codigo=" + codigo;
    console.log(cadena);
        
	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/crud_region/eliminar_region.php",
		data:cadena,
		success:function(r){
			if(r==1){
                $('#tabla').load('../../PHP/ADM/crud_region/tabla.php');
				alertify.success("Se elimino correctamente la región");
			}else{
				alertify.error("Fallo al eliminar la región");
			}
		}
    });
}


