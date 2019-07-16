	
function agregardatos(rut,nombre,apellidoP,apellidoM,pass,direccion,telefono,correo,ciudad){

	cadena="rut=" + rut + 
            "&nombre=" + nombre +
            "&apellidoP=" + apellidoP +
            "&apellidoM=" + apellidoM +
            "&pass=" + pass +
            "&direccion=" + direccion +
            "&telefono=" + telefono +
            "&correo=" + correo +
            "&ciudad=" + ciudad;

            
        
	$.ajax({
		type:"POST",
		url:"../../PHP/Usuario/registro.php",
		data:cadena,
		success:function(r){
			if(r==1){
				//alertify.success("Valores agregados con exito");
			}else{
				//alertify.error("Fallo al agregar los datos");
			}
		}
	});

}