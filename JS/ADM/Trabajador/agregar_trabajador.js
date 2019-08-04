
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

				$("#id_region1").load('../../PHP/ADM/Trabajador/llenarregion.php');
				$("#idciudadeditar1").load('../../PHP/ADM/Trabajador/llenarciudad.php');
				$("#rol1").load('../../PHP/ADM/Trabajador/llenarrol.php');
				$("#id_su1").load('../../PHP/ADM/Trabajador/llenarsucursal.php');

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
    $('#Rut_empleado1').val(d[0]);
	$('#nombre_empleado1').val(d[1]);
	$('#paterno_empleado1').val(d[2]);
	$('#materno_empleado1').val(d[3]);
	$("#id_region1").val(d[4]);
console.log(d[9])
		$("#idciudadeditar option[value='"+d[11]+"']").attr("selected", true);
//$("#idciudadeditar").val(d[9]);
	$('#direccion_empleado1').val(d[7]);
	$('#telefono_empleado1').val(d[8]);
	$('#correo_empleado1').val(d[9]);
    $('#contraseña_empleado1').val(d[10]);
}

function actualizadatos(){

    rut=$('#Rut_empleado1').val();
	nombre=$('#nombre_empleado1').val();	
    paterno=$('#paterno_empleado1').val();
	materno=$('#materno_empleado1').val();
	ciudad=document.getElementById("idciudadeditar1").value;
	sucursal=document.getElementById("id_su1").value;
	rol=document.getElementById("rol1").value;


	console.log(ciudad);
    direccion=$('#direccion_empleado1').val();
    telefono=$('#telefono_empleado1').val();
	correo=$('#correo_empleado1').val();
	contraseña=$('#contraseña_empleado1').val();


    cadena="rut=" + rut + 
            "&nombre=" + nombre +
			"&paterno=" + paterno +
			"&materno=" + materno + 
			"&ciudad=" + ciudad +
			"&sucursal=" + sucursal +
			"&rol=" + rol +
			"&direccion=" + direccion + 
            "&telefono=" + telefono +
			"&correo=" + correo +
			"&contraseña=" + contraseña;

    $.ajax({
        type:"POST",
        url:"../../PHP/ADM/Trabajador/actualizar_trabajador.php",
        data:cadena,
        success:function(r){
			console.log(r);
        if(r==1){
                $('#tabla').load('../../PHP/ADM/Trabajador/tabla.php');
				alertify.success("Se actualizaron los datos correctamente de el Trabajador");
				$("#id_region1").load('../../PHP/ADM/Trabajador/llenarregion.php');
				$("#idciudadeditar1").load('../../PHP/ADM/Trabajador/llenarciudad.php');
				$("#rol1").load('../../PHP/ADM/Trabajador/llenarrol.php');
				$("#id_su1").load('../../PHP/ADM/Trabajador/llenarsucursal.php');




                }else{
                    alertify.error("Fallo al actualizar los datos de el Trabajador");
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
