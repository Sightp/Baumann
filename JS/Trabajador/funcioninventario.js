
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

