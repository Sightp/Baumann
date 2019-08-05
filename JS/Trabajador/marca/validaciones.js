$(document).ready(function() {

    nombre_marca_vacio=0;
    nombre_marca_MAX=0;

    jQuery(function() {
        
        $("#NOMBRE_MARCA_VACIO").hide();
        $("#NOMBRE_MARCA_MAX").hide();
        $("#agregarnuevo").prop('disabled', true);
    });


    /// VALIDACION DE QUE EL NOMBRE NO SE ENCUENTRA 

$("#nombreu").blur(function(){
    var cantidad;
    cantidad=$("#nombreu").val().length;
    console.log(cantidad);
    if(cantidad==0)
    {
        $("#NOMBRE_MARCA_VACIO").show();
        nombre_marca_vacio=0;
        return true;
    }
    else
    {
        $("#NOMBRE_MARCA_VACIO").hide();
        nombre_marca_vacio=1;
        return false;

    }

});

// VALIDAR QUE el nombre NO SEA MAYOR A 15 CARACTERES

$("#nombreu").blur(function(){
    var cantidad;
    cantidad=$("#nombreu").val().length;
    if(cantidad>=15)
    {
        $("#NOMBRE_MARCA_MAX").show();
        nombre_marca_MAX=0;
        return true;



    }
    else
    {
        $("#NOMBRE_MARCA_MAX").hide();
        nombre_marca_MAX=1;
        return false;



    }
});


$(document).click(function(){
    //   $("#agregarnuevo").prop('disabled', true);
   
  
       console.log(nombre_marca_vacio);
       console.log(nombre_marca_MAX);
   
           if( nombre_marca_vacio==1 && nombre_marca_MAX==1 )
           {
               $("#actualizardatos").prop('disabled', false);
   
           }
           else
           {
              $("#actualizardatos").prop('disabled', true);
   
               
           }
   });
   

});