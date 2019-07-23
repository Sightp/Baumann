

function agregaform(datos){
    d=datos.split('||');

    $('#rut').val(d[0]);
    $('#nombre').val(d[1]);
    $('#apaterno').val(d[2]);
    $('#amaterno').val(d[3]);
    $('#pass').val(d[4]);
    $('#direc').val(d[5]);
    $('#tel').val(d[6]);
    $('#correo').val(d[7]);
    $('#documento').val(d[8]);
}

function actualizadatos(){
    rut=$('#rut').val();
    nombre=$('#nombre').val();
    apaterno=$('#apaterno').val();
    amaterno=$('#amaterno').val();
    pass=$('#pass').val();
    direc=$('#direc').val();
    tel=$('#tel').val();
    correo=$('#correo').val();
    documento=$('#documento').val();
    

    cadena="rut=" + rut +
    "&nombre=" + nombre +
    "&apaterno=" + apaterno +
    "&amaterno=" + amaterno +
    "&pass=" + pass +
    "&direc=" + direc +
    "&tel=" + tel +
    "&correo=" + correo +
    "&documento=" + documento;

    $.ajax({
        type:"POST",
        url:"../../PHP/Trabajador/datosclientes/actualizadatoscliente.php",
        data: cadena,
        success:function(r){
            if (r==1) {
                $('#tabla').load('../../PHP/Trabajador/datosclientes/tablaCliente.php');
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
    cadena="cliid=" + id;

    $.ajax({
        type:"POST",
        url:"../../PHP/Trabajador/datosclientes/eliminarcliente.php",
        data: cadena,
        success:function(r){
            if (r==1) {
                $('#tabla').load('../../PHP/Trabajador/datosclientes/tablaCliente.php');
                alertify.success("Eliminado con exito");
            }else{
                alertify.error("Fallo el servidor");
            }
        }
    });
    
}