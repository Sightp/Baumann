$(document).ready(function() {

    Condicionidrol=0;
    Condiciondes=0;
  
    jQuery(function() {
      $('.idrolvacio').hide();
      $('.descrolvacio').hide();
      $("#guardarnuevo").prop('disabled', true);
  
    });
    
  //--------------VALIDACIONES PARA LA SECCION DE ROLES------------------------//
  
  
  //ID ROL VACIO//
  // SOLO ACEPTE VALORES NUMERICOS
$("#idrol").keydown(function(event) {
    if(event.shiftKey)
    {
      event.preventDefault();
    }
  
    if (( event.keyCode >47  && event.keyCode < 58 ||event.keyCode==8 )){      
    }else{
        event.preventDefault();
    }
    });
  
  //DESCRIPCION ROL VACIO//
  $("#desc_rol").blur(function() {
      var total;
      total=$("#desc_rol").val().length;
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
        $("#guardarnuevo").prop('disabled', false);
      }else{
        $("#guardarnuevo").prop('disabled', true);
      } 
  
  
    });
  
  
  
  
  //--------------FIN VALIDACIONES REGISTRO---------------------------------------//
  
  
    
        
  });