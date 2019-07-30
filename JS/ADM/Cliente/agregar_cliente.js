
$(document).ready(function(){

// inicializacion de variables 

// variable edit utilizada para el proceso de editar 

let rut_cliente=0;
  obtenertareas();

    function obtenertareas() {

        $.ajax ({
    
          url : '../../PHP/ADM/Cliente/mostrarcliente.php',
          type : 'GET',
          success : function(response){
    
            let marca = JSON.parse(response);
            let template='';
            marca.forEach(marca => {
            template +=`
            
            <tr rutproveedor="${marca.rut}">
            <td>${marca.rut}</td>
              <td>${marca.nombre}</td>
              <td>${marca.paterno}</td>
              <td>${marca.materno}</td>
              <td>${marca.ciudad}</td>
              <td>${marca.direccion}</td>
              <td>${marca.telefono}</td>
              <td>${marca.correo}</td>
              <td>${marca.contraseña}</td>
              <td><button type="button" class="editar-cliente btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modaleditarproveedor">  </button></td>
              <td><button type="button" class="eliminar-cliente btn btn-danger glyphicon glyphicon-remove">  </button></td>
    
            </tr>
            
            `
        
    
            });
    
            $('#marcas').html(template);
    
          }
      });
    
    
    
    
    }

    
        // AGREGAR Y EDITAR CLIENTE

    $("#guardarcliente").click(function(e){
      console.log('entrando en lafuncion');
  const postData = {
    rut : $('#rut_cliente').val(),
    nombre : $('#nombre_cliente').val(),
    paterno : $('#paterno_cliente').val(),
    materno : $('#materno_cliente').val(),
    ciudad : $('#ciudad_cliente').val(),
    direccion : $('#direccion_cliente').val(),
    telefono : $('#telefono_cliente').val(),
    correo : $('#correo_cliente').val(),
    contraseña : $('#contraseña_cliente').val()

  };


// envio los datos recibidos a la paginna agregar.php por metodo post
  $.post( '../../PHP/ADM/Cliente/insertar_cliente.php',postData,function (response){
    console.log(response);
    var prueba = response;
    console.log(prueba.length);
    console.log(prueba);
    edit=false;
    if(response==0)
    {
      alertify.success("Se agrego correctamente el cliente");
      obtenertareas();

    }
    else
    {
      alertify.error("Fallo al agregar el cliente");


    }
  
    
    $('#formulario1').trigger('reset');
   
  
  });
  console.log(postData);
   e.preventDefault();
  });

  

/////////////////////// EDITAR ////////////////////////////777


$("#editardatosproveedores").click(function(e){
  console.log('entrando en lafuncion 3333');
const postData = {
rut : $('#rut_cliente1').val(),
nombre : $('#nombre_cliente1').val(),
paterno : $('#paterno_cliente1').val(),
materno : $('#materno_cliente1').val(),
ciudad : $('#ciudad_cliente1').val(),
direccion : $('#direccion_cliente1').val(),
telefono : $('#telefono_cliente1').val(),
correo : $('#correo_cliente1').val(),
contraseña : $('#contraseña_cliente1').val()

};


// envio los datos recibidos a la paginna agregar.php por metodo post
console.log("llega aca ");
$.post('../../PHP/ADM/Cliente/editar_cliente.php',postData,function (response){
console.log(response);
var prueba = response;
console.log(prueba.length);
console.log(prueba);
if(response==1)
{
  alertify.success("Se actualizaron los datos correctamente de Cliente");
  obtenertareas();


}
else
{
  alertify.error("Fallo al actualizar los datos de Cliente");


}


// $('#formulario2').trigger('reset');


});
console.log(postData);
e.preventDefault();
});



//////////////////////77 FIN EDITAR ///////////////////777

  // MOSTRAR LOS ELEMENTOS EN EL FORMULARIO

  $(document).on('click','.editar-cliente',function(){

    // Dejo el input rut  no editable 
  //$("#rut_proveedor").attr("readonly","readonly");
  //$("#rut_proveedor").addClass("readOnly");
  
  
  console.log("se mete al if");
    let element = $(this)[0].parentElement.parentElement;
    let rut =$(element).attr('rutproveedor');
    console.log(rut);
    $.post('../../PHP/ADM/Cliente/obtener_cliente.php',{rut},function(response){
  
      const editar = JSON.parse(response);
  
      $('#rut_cliente1').val(editar.rut);
      $('#nombre_cliente1').val(editar.nombre);
      $('#paterno_cliente1').val(editar.paterno);
      $('#materno_cliente1').val(editar.materno);
      $('#ciudad_cliente1').val(editar.ciudad);
      $('#direccion_cliente1').val(editar.direccion);
      $('#telefono_cliente1').val(editar.telefono);
      $('#correo_cliente1').val(editar.correo);
      $('#contraseña_cliente1').val(editar.contraseña);

      edit =true;
  
      console.log(response);
  
    })
  
  });
  

////////////////// ELIMINAR /////////////////////////////7

  $(document).on('click','.eliminar-cliente',function(){
    let element =$(this)[0].parentElement.parentElement;
     rut_cliente = $(element).attr('rutproveedor');

    
    alertify.confirm('Eliminar Datos', '¿Seguro desea eliminar región? Recuerde que esto implicara eliminar todas las ciudades asociadas a la región. ', 
    function(){ 

   
      console.log(rut_cliente);
      
      $.post('../../PHP/ADM/Cliente/eliminar_cliente.php',{rut_cliente},function(response){
        
        console.log(response);
        obtenertareas();  
          
      
      
      })

      
     }
    , function(){ alertify.error('Eliminación cancelada')});

  
    })
    




function preguntarSiNo(){
  alertify.confirm('Eliminar Datos', '¿Seguro desea eliminar región? Recuerde que esto implicara eliminar todas las ciudades asociadas a la región. ', 
  function(){ eliminar_cliente() }
  , function(){ alertify.error('Eliminación cancelada')});

}




//////////////////7 FIN ELIMINAR //////////////////////////7


  

});
