$(document).ready(function() {

    Condicionnom=0;
    Condicionimg=0;
    Condicionmarco=0;
    Condicioncolor=0;
    Condicionmaterial=0;
    Condiciongenero=0;
    Condicionedad=0;
  
    jQuery(function() {
     $('.nomvacio').hide();
     $('.imgvacio').hide();
     $('.marcovacio').hide();
     $('.colorvacio').hide();
     $('.materialvacio').hide();
     $('.generovacio').hide();
     $('.edadvacio').hide();
     $("#actualizadatos").prop('disabled', true);
  
    });
    
  //--------------VALIDACIONES PARA LA SECCION DE EDICIÓN DE INVENTARIO------------------------//
  
//PRECIO PRODUCTO VACIO//
  // SOLO ACEPTE VALORES NUMERICOS
  $("#precio").keydown(function(event) {
    if(event.shiftKey)
    {
      event.preventDefault();
    }
  
    if (( event.keyCode >47  && event.keyCode < 58 ||event.keyCode==8 )){      
    }else{
        alertify.error('Este campo solo acepta números');
        event.preventDefault();
    }
    });

  //NOMBRE PRODUCTO VACIO//
  $("#nombreproducto").blur(function() {
      var total;
      total=$("#nombreproducto").val().length;
      if (total==0){
          $('.nomvacio').show();
          Condicionnom=0;
          return true;
      }
      else {
          $('.nomvacio').hide();
          Condicionnom=1;
          return false;
      } 	
  });
//CANTIDAD DE PRODUCTO VACIO//
  // SOLO ACEPTE VALORES NUMERICOS
  $("#cantidad").keydown(function(event) {
    if(event.shiftKey)
    {
      event.preventDefault();
    }
  
    if (( event.keyCode >47  && event.keyCode < 58 ||event.keyCode==8 )){      
    }else{
        alertify.error('Este campo solo acepta números');
        event.preventDefault();
    }
    });

    //IMAGEN PRODUCTO VACIO//
  $("#imagen").blur(function() {
    var total;
    total=$("#imagen").val().length;
    if (total==0){
        $('.imgvacio').show();
        Condicionimg=0;
        return true;
    }
    else {
        $('.imgvacio').hide();
        Condicionimg=1;
        return false;
    } 	
});
//TIPO DE MARCO PRODUCTO VACIO//
$("#marcoproduc").blur(function() {
    var total;
    total=$("#marcoproduc").val().length;
    if (total==0){
        $('.marcovacio').show();
        Condicionmarco=0;
        return true;
    }
    else {
        $('.marcovacio').hide();
        Condicionmarco=1;
        return false;
    } 	
});
//COLOR DE MARCO PRODUCTO VACIO//
$("#color").blur(function() {
    var total;
    total=$("#color").val().length;
    if (total==0){
        $('.colorvacio').show();
        Condicioncolor=0;
        return true;
    }
    else {
        $('.colorvacio').hide();
        Condicioncolor=1;
        return false;
    } 	
});
//MATERIAL DE MARCO PRODUCTO VACIO//
$("#material").blur(function() {
    var total;
    total=$("#material").val().length;
    if (total==0){
        $('.materialvacio').show();
        Condicionmaterial=0;
        return true;
    }
    else {
        $('.materialvacio').hide();
        Condicionmaterial=1;
        return false;
    } 	
});
//GENERO DEL MARCO PRODUCTO VACIO//
$("#genero").blur(function() {
    var total;
    total=$("#genero").val().length;
    if (total==0){
        $('.generovacio').show();
        Condiciongenero=0;
        return true;
    }
    else {
        $('.generovacio').hide();
        Condiciongenero=1;
        return false;
    } 	
});
//RANGO EDAD DEL MARCO PRODUCTO VACIO//
$("#edad").blur(function() {
    var total;
    total=$("#edad").val().length;
    if (total==0){
        $('.edadvacio').show();
        Condicionedad=0;
        return true;
    }
    else {
        $('.edadvacio').hide();
        Condicionedad=1;
        return false;
    } 	
});
  //VALIDACION DE CAMPOS VACIOS//
  
  
  $(document).click(function() {
  
    
      if(Condicionnom==1 || Condicionimg==1 || Condicionmarco==1 || Condicioncolor==1 || Condicionmaterial==1 || Condiciongenero==1 || Condicionedad==1){
        $("#actualizadatos").prop('disabled', false);
      }else{
        $("#actualizadatos").prop('disabled', true);
      } 
  
  
    });
  
  
  
  
  //--------------FIN VALIDACIONES REGISTRO---------------------------------------//
  
  
    
        
  });