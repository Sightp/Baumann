
function agregardatos(idrol,desc_rol){
    cadena="idrol=" + idrol +
    "&desc_rol=" + desc_rol;

    $.ajax({
        type:"POST",
        url:"../../PHP/ADM/rol/agregarol.php",
        data: cadena,
        success:function(r){
            if (r==1) {
                $('#tabla').load('../../PHP/ADM/rol/tablarol.php');
                alertify.success("Agregado con exito");
            }else{
                alertify.error("Fallo el servidor");
            }
        }
    });
}

function agregaform(datos){
    d=datos.split('||');

    $('#idroles').val(d[0]);
    $('#descripcion_rol').val(d[1]);
}

function actualizadatos(){

    idroles=$('#idroles').val();
    descripcion_rol=$('#descripcion_rol').val();

    cadena="idroles=" + idroles +
    "&descripcion_rol=" + descripcion_rol;
    $.ajax({
        type:"POST",
        url:"../../PHP/ADM/rol/actualizadatosrol.php",
        data: cadena,
        success:function(r){
            if (r==1) {
                $('#tabla').load('../../PHP/ADM/rol/tablarol.php');
                alertify.success("Actualizado con exito");
            }else{
                alertify.error("Fallo el servidor");
            }
        }
    });

}

function preguntar(id) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', function(){ eliminadatos(id) }
                , function(){ alertify.error('Cancelación exitosa')});
}

function eliminadatos(id){
    cadena="proid=" + id;

    $.ajax({
        type:"POST",
        url:"../../PHP/ADM/rol/eliminarol.php",
        data: cadena,
        success:function(r){
            if (r==1) {
                $('#tabla').load('../../PHP/ADM/rol/tablarol.php');
                alertify.success("Eliminado con exito");
            }else{
                alertify.error("Fallo el servidor");
            }
        }
    });
    
}