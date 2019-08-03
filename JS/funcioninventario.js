
function agregardatos(proid,marid,sucid,abaid,proprecio,pronombre,procantidad,proimagen,promarco,procolor,promaterial,progenero,proedad){
    cadena="proid=" + proid +
    "&marid=" + marid +
    "&sucid=" + sucid +
    "&abaid=" + abaid +
    "&proprecio=" + proprecio +
    "&pronombre=" + pronombre +
    "&procantidad=" + procantidad +
    "&proimagen=" + proimagen +
    "&promarco=" + promarco +
    "&procolor=" + procolor +
    "&promaterial=" + promaterial +
    "&progenero=" + progenero +
    "&proedad=" + proedad;

    $.ajax({
        type:"POST",
        url:"../../PHP/ADM/inventario/agregardatos.php",
        data: cadena,
        success:function(r){
            if (r==1) {
                $('#tabla').load('../../PHP/ADM/inventario/tabla.php');
                alertify.success("Agregado con exito");
            }else{
                alertify.error("Fallo el servidor");
            }
        }
    });
}

function agregaform(datos){
    d=datos.split('||');

    $('#idproducto').val(d[0]);
    $('#nombreproducto').val(d[1]);
    $('#precio').val(d[2]);
    $('#cantidad').val(d[3]);
    $('#imagen').val(d[4]);
    $('#marcoproduc').val(d[5]);
    $('#color').val(d[6]);
    $('#material').val(d[7]);
    $('#genero').val(d[8]);
    $('#edad').val(d[9]);
}

function actualizadatos(){

    proid=$('#idproducto').val();
    proprecio=$('#precio').val();
    pronombre=$('#nombreproducto').val();
    procantidad=$('#cantidad').val();
    proimagen=$('#imagen').val();
    promarco=$('#marcoproduc').val();
    procolor=$('#color').val();
    promaterial=$('#material').val();
    progenero=$('#genero').val();
    proedad=$('#edad').val();

    cadena="proid=" + proid +
    "&proprecio=" + proprecio +
    "&pronombre=" + pronombre +
    "&procantidad=" + procantidad +
    "&proimagen=" + proimagen +
    "&promarco=" + promarco +
    "&procolor=" + procolor +
    "&promaterial=" + promaterial +
    "&progenero=" + progenero +
    "&proedad=" + proedad;
    $.ajax({
        type:"POST",
        url:"../../PHP/ADM/inventario/actualizadatos.php",
        data: cadena,
        success:function(r){
            if (r==1) {
                $('#tabla').load('../../PHP/ADM/inventario/tabla.php');
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
        url:"../../PHP/ADM/inventario/eliminardatos.php",
        data: cadena,
        success:function(r){
            if (r==1) {
                $('#tabla').load('../../PHP/ADM/inventario/tabla.php');
                alertify.success("Eliminado con exito");
            }else{
                alertify.error("Fallo el servidor");
            }
        }
    });
    
}