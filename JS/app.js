$( document ).ready(function() {

// inicializacion de variables 

// variable edit utilizada para el proceso de editar 
    let edit=false ;

   // funcion para mostrar tabla 
   mostrar_tabla_proveedor();

// MOSTRAR LA TABLA DE PROVEEDORES


function mostrar_tabla_proveedor() {

      $.ajax ({

        url : '../../PHP/proveedor/mostrarproveedores.php',
        type : 'GET',
        success : function(response){

          let marca = JSON.parse(response);
          let template='';
          marca.forEach(marca => {
          template +=`
          
          <tr rutproveedor="${marca.rut}">
            <td >${marca.rut}</td>
            <td >${marca.description}</td>
            <td>${marca.telefono}</td>
            <td>${marca.correo}</td>
            <td><button type="button" class="editar-proveedor btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modaleditarproveedor">  </button></td>
            <td><button type="button"  class="eliminar-proveedor btn btn-danger glyphicon glyphicon-remove" data-toggle="modal" data-target="#modaleditarproveedor">  </button></td>

          </tr>
          
          `
      

          });

          $('#marcas').html(template);

        }
    });

 


}



// AGREGAR PROVEEDOR 


$('#formulario2').submit(function(e){
const postData = {
  rut : $('#rut_proveedor').val(),
  description : $('#nombre_proveedor').val(),
  telefono : $('#telefono_proveedor').val(),
  correo : $('#correo_telefono').val()
};
// si la variable  edit es false , se le asigna la direccion agregar.proveedor.php a la variable url , en el caso de ser verdadero se le asigna la direccion  editar-proveedor.php
let url = edit == false ? '../../PHP/proveedor/agregar-proveedor.php' : '../../PHP/proveedor/editar-proveedor.php';

// envio los datos recibidos a la paginna agregar.php por metodo post
$.post(url,postData,function (response){
  console.log(response);
  var prueba = response;
  console.log(prueba.length);
  console.log(prueba);
  edit=false;

  mostrar_tabla_proveedor();

  // vuelvo editable el input rut 
  $("#rut_proveedor").removeAttr("readonly");


  // reseteo los input del formulario 
  $('#formulario2').trigger('reset');
 

});
console.log(postData);
 e.preventDefault();
});

// fin agregar funcion




 // ELIMINAR PROVEEDOR


$(document).on('click','.eliminar-proveedor',function(){
let element =$(this)[0].parentElement.parentElement;

let rut = $(element).attr('rutproveedor');
console.log(rut);

$.post('../../PHP/proveedor/eliminar-proveedor.php',{rut},function(response){
  
  console.log(response);
  mostrar_tabla_proveedor(); 

    // reseteo los input del formulario 
    $('#formulario2').trigger('reset');
    $("#rut_proveedor").removeAttr("readonly");


})
})


// FIN ELIMINAR PROOVEDOR 

// EDITAR PROVEEDOR


$(document).on('click','.editar-proveedor',function(){

  // Dejo el input rut  no editable 
$("#rut_proveedor").attr("readonly","readonly");
$("#rut_proveedor").addClass("readOnly");



  let element = $(this)[0].parentElement.parentElement;
  let rut =$(element).attr('rutproveedor');
  console.log(rut);
  $.post('../../PHP/proveedor/obtener-proveedor.php',{rut},function(response){

    const editar = JSON.parse(response);

    $('#rut_proveedor').val(editar.rut);
    $('#nombre_proveedor').val(editar.description);
    $('#telefono_proveedor').val(editar.telefono);
    $('#correo_telefono').val(editar.correo);
    edit =true;

    console.log(response);

  })

});

// FIN EDITAR PROVEEDOR













});
