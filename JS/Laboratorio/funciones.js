function agregaform(datos){
   
    d=datos.split('||');
    $('#codigou').val(d[0]);
    $('#nombreu').val(d[1]);
    $("#estadou").val(d[2]);

}

//ACTUALIZAR DATOS DE REGION//
function actualizadatos(){

    codigo=$('#codigou').val();
    estado=document.getElementById("estadou").value;

    cadena="codigo=" + codigo + 
            "&estado=" + estado;
    
    


    $.ajax({
        type:"POST",
        url:"../../PHP/Laboratorio/actualizarDatos.php",
        data:cadena,
        success:function(r){
        if(r==1){
                $('#tabla').load('../../PHP/Laboratorio/tabla.php');
                alertify.success("Se actualizo el estado de orden");
                }else{
                    alertify.error("Fallo al actualizar el estado de orden");
                }
            }
    });   

}






