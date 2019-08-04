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
    $('#paisu').val(d[2]);
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


$(document).ready(function() {

    CondicionnomE=0;
    
    CondicionnomA=0;
    CondicionCodigo=0;
 
    
  
    jQuery(function() {
      $('.nomvacioA').hide();
      $('.nomvacioE').hide();
      $('.codigovacio').hide();
    });

    //NOMBRE VACIO AGREGAR//
    $("#nombre").blur(function() {
    var total;
    total=$("#nombre").val().length;
    if (total==0){
        $('.nomvacioA').show();
        CondicionnomE=0;
        return true;
    }
    else {
        $('.nomvacioA').hide();
        CondicionnomE=1;
        return false;
    } 	
});




//NOMBRE VACIO EDITAR//
$("#nombreu").blur(function() {
    var total;
    total=$("#nombreu").val().length;
    if (total==0){
        $('.nomvacioE').show();
        CondicionnomA=0;
        return true;
    }
    else {
        $('.nomvacioE').hide();
        CondicionnomA=1;
        return false;
    } 	
});


//Codigo VACIO AGREGAR//
$("#codigo").blur(function() {
    var total;
    total=$("#codigo").val().length;
    if (total==0){
        $('.codigovacio').show();
        CondicionCodigo=0;
        return true;
    }
    else {
        $('.codigovacio').hide();
        CondicionCodigo=1;
        return false;
    } 	
});




//NUMEROS SOLO ACEPTE//
$("#codigo").keydown(function(event) {
    if(event.shiftKey)
    {
      event.preventDefault();
    }
  
    if ((event.keyCode >47  && event.keyCode < 58 || event.keyCode==8 )){      
    }else{
        alertify.error('Este campo solo acepta números');
        event.preventDefault();
    }
    });
  



$(document).click(function() {
    paisv=document.getElementById("pais").value;
	if(CondicionnomA==1){
	    $("#actualizardatos").prop('disabled', false);
	}else{
	    $("#actualizardatos").prop('disabled', true);
    }

    
    if(CondicionnomE==1 && CondicionCodigo==1 && paisv>0){
	    $("#agregarnuevo").prop('disabled', false);
	}else{
	    $("#agregarnuevo").prop('disabled', true);
    }


    });




});
