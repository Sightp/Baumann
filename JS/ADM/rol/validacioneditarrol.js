$(document).ready(function() {

    Condiciondescrol=0;
  
    jQuery(function() {
      $('.descrolvacio').hide();
      $("#actualizadatos").prop('disabled', true);
  
    });
    
  //--------------VALIDACIONES PARA LA SECCION DE EDICIÓN DE ROLES------------------------//
  
  
  //DESCRIPCION ROL VACIO//
  $("#descripcion_rol").blur(function() {
      var total;
      total=$("#descripcion_rol").val().length;
      if (total==0){
          $('.descrolvacio').show();
          Condiciondescrol=0;
          return true;
      }
      else {
          $('.descrolvacio').hide();
          Condiciondescrol=1;
          return false;
      } 	
  });

  //VALIDACION DE CAMPOS VACIOS//
  
  
  $(document).click(function() {
  
    
      if(Condiciondescrol==1){
        $("#actualizadatos").prop('disabled', false);
      }else{
        $("#actualizadatos").prop('disabled', true);
      } 
  
  
    });
  
  
  
  
  //--------------FIN VALIDACIONES REGISTRO---------------------------------------//
  
  
    
        
  });