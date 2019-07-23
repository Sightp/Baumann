
function agregardatos(proid,marid,sucid,abaid,prodescrip,proprecio,pronombre,procantidad){
    cadena="proid=" + proid +
    "&marid=" + marid +
    "&sucid=" + sucid +
    "&abaid=" + abaid +
    "&prodescrip=" + prodescrip +
    "&proprecio=" + proprecio +
    "&pronombre=" + pronombre +
    "&procantidad=" + procantidad;

    $.ajax({
        type:"POST",
        url:"../../PHP/Trabajador/inventario/agregardatos.php",
        data: cadena,
        success:function(r){
            if (r==1) {
                $('#tabla').load('../../PHP/Trabajador/inventario/tabla.php');
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
    $('#descripcion').val(d[4]);
}

function actualizadatos(){

    proid=$('#idproducto').val();
    prodescrip=$('#descripcion').val();
    proprecio=$('#precio').val();
    pronombre=$('#nombreproducto').val();
    procantidad=$('#cantidad').val();

    cadena="proid=" + proid +
    "&prodescrip=" + prodescrip +
    "&proprecio=" + proprecio +
    "&pronombre=" + pronombre +
    "&procantidad=" + procantidad;
    $.ajax({
        type:"POST",
        url:"../../PHP/Trabajador/inventario/actualizadatos.php",
        data: cadena,
        success:function(r){
            if (r==1) {
                $('#tabla').load('../../PHP/Trabajador/inventario/tabla.php');
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
        url:"../../PHP/Trabajador/inventario/eliminardatos.php",
        data: cadena,
        success:function(r){
            if (r==1) {
                $('#tabla').load('../../PHP/Trabajador/inventario/tabla.php');
                alertify.success("Eliminado con exito");
            }else{
                alertify.error("Fallo el servidor");
            }
        }
    });
    
}