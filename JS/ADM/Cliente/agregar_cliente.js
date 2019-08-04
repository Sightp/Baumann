
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
				$("#id_region").load('../../PHP/ADM/Cliente/llenarregion.php');
				$("#idciudad").load('../../PHP/ADM/Cliente/llenarciudad.php');

				$('#formulario1').trigger('reset');

				

			}else{
                console.log(r);
                console.log("se mete al else");
				alertify.error("Fallo el servidor fgfg:(");
				$('#formulario1').trigger('reset');

			}
		}
	});

}

/******************MOSTRAR LOS DATOS SELECCIONADOS ******************************** */

//TRASPASAR DATOS AL MODAL Y SELECCIONAR EL PAIS AUTOMATICAMENTE//
function agregaform(datos){

	$("#id_region1").load('../../PHP/ADM/Cliente/llenarregion.php');

    d=datos.split('||');
    $('#rut_cliente1').val(d[0]);
	$('#nombre_cliente1').val(d[1]);
	$('#paterno_cliente1').val(d[2]);
	$('#materno_cliente1').val(d[3]);
	$("#id_region1").val(d[4]);
console.log(d[9])
		$("#idciudadeditar option[value='"+d[9]+"']").attr("selected", true);
//$("#idciudadeditar").val(d[9]);
	$('#direccion_cliente1').val(d[5]);
	$('#telefono_cliente1').val(d[6]);
	$('#correo_cliente1').val(d[7]);
    $('#contraseña_cliente1').val(d[8]);
}



function actualizadatos(){

    rut=$('#rut_cliente1').val();
	nombre=$('#nombre_cliente1').val();	
    paterno=$('#paterno_cliente1').val();
	materno=$('#materno_cliente1').val();
	ciudad=document.getElementById("idciudadeditar").value;
	console.log(ciudad);
    direccion=$('#direccion_cliente1').val();
    telefono=$('#telefono_cliente1').val();
	correo=$('#correo_cliente1').val();
	contraseña=$('#contraseña_cliente1').val();


    cadena="rut=" + rut + 
            "&nombre=" + nombre +
			"&paterno=" + paterno +
			"&materno=" + materno + 
			"&ciudad=" + ciudad +
			"&direccion=" + direccion + 
            "&telefono=" + telefono +
			"&correo=" + correo +
			"&contraseña=" + contraseña;

    $.ajax({
        type:"POST",
        url:"../../PHP/ADM/Cliente/actualizar_cliente.php",
        data:cadena,
        success:function(r){
			console.log(r);
        if(r==1){
                $('#tabla').load('../../PHP/ADM/Cliente/tabla.php');
				alertify.success("Se actualizaron los datos correctamente de el cliente");
				$("#id_region1").load('../../PHP/ADM/Cliente/llenarregion.php');
				$("#idciudadeditar").load('../../PHP/ADM/Cliente/llenarciudad.php');


                }else{
                    alertify.error("Fallo al actualizar los datos de el cliente");
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