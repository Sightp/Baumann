function agregardatos(codigo,nombre,ciudad,telefono,correo,direccion){

	cadena="codigo=" + codigo + 
            "&nombre=" + nombre +
            "&ciudad=" + ciudad +
            "&telefono=" + telefono +
            "&correo=" + correo +
            "&direccion=" + direccion;
        
           
        
	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/crud_sucursal/insertar_sucursal.php",
		data:cadena,
		success:function(r){
			if(r==1){
                $('#tabla').load('../../PHP/ADM/crud_sucursal/tabla.php');
				alertify.success("Sucursal agregada con éxito!");
			}else{
				alertify.error("Fallo al agregar la Sucursal");
			}
		}
    });
}

//TRASPASAR DATOS AL MODAL Y SELECCIONAR EL PAIS AUTOMATICAMENTE//
function agregaform(datos){
   
    d=datos.split('||');
    $('#codigou').val(d[0]);
    $('#nombreu').val(d[1]);
    $("#ciudadu option[value='"+d[2]+"']").attr("selected", true);
    $('#telefonou').val(d[3]);
    $('#correou').val(d[4]);
    $('#direccionu').val(d[5]);
    
}

//ACTUALIZAR DATOS DE REGION//
function actualizadatos(){

    codigo=$('#codigou').val();
    nombre=$('#nombreu').val();
    ciudad=document.getElementById("ciudadu").value;
    telefono=$('#telefonou').val();
    correou=$('#correou').val();
    direccion=$('#direccionu').val();
    

    cadena="codigo=" + codigo + 
            "&nombre=" + nombre +
            "&ciudad=" + ciudad +
            "&telefono=" + telefono +
            "&correo=" + correo +
            "&direccion=" + direccion;

    $.ajax({
        type:"POST",
        url:"../../PHP/ADM/crud_sucursal/actualizar_sucursal.php",
        data:cadena,
        success:function(r){
        if(r==1){
                $('#tabla').load('../../PHP/ADM/crud_sucursal/tabla.php');
                alertify.success("Se actualizaron los datos correctamente de Sucursal");
                }else{
                    alertify.error("Fallo al actualizar los datos de Sucursal");
                }
            }
    });   

}

function preguntarSiNo(codigo){
    alertify.confirm('Eliminar Datos', '¿Seguro desea eliminar la Sucursal? Recuerde que esto implicará eliminar todas las Sucursales asociadas a la Ciudad. ', 
    function(){ eliminarDatos(codigo) }
    , function(){ alertify.error('Eliminación cancelada')});

}

function eliminarDatos(codigo){
    cadena="codigo=" + codigo;
    console.log(cadena);
        
	$.ajax({
		type:"POST",
		url:"../../PHP/ADM/crud_sucursal/eliminar_sucursal.php",
		data:cadena,
		success:function(r){
			if(r==1){
                $('#tabla').load('../../PHP/ADM/crud_sucursal/tabla.php');
				alertify.success("Se eliminó correctamente la Sucursal");
			}else{
				alertify.error("Fallo al eliminar la Sucursal");
			}
		}
    });
}


