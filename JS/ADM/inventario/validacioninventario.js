$(document).ready(function() {

    Condicionrut=0;
    Condicionnom=0;
    Condicionimg=0;
    Condicionmarco=0;
    Condicioncolor=0;
    Condicionmaterial=0;
    Condiciongenero=0;
    Condicionedad=0;
  
    jQuery(function() {
     $('.rutvacio').hide();
     $('.rutinvalido').hide();
     $('.nomvacio').hide();
     $('.imgvacio').hide();
     $('.marcovacio').hide();
     $('.colorvacio').hide();
     $('.materialvacio').hide();
     $('.generovacio').hide();
     $('.edadvacio').hide();
     $("#guardarnuevo").prop('disabled', true);
  
    });
    
  //--------------VALIDACIONES PARA LA SECCION DE INVENTARIO------------------------//
  
  
  //ID PRODUCTO VACIO//
  // SOLO ACEPTE VALORES NUMERICOS
$("#idproducto_inventario").keydown(function(event) {
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
  //RUT VACIO//
$("#idproovedor_inventario").blur(function() {
    var totalM;
    totalM=$("#idproovedor_inventario").val().length;
    if (totalM==0){
        $('.rutvacio').show();
        $('.rutinvalido').hide();
        return true;
    }
    else {
        $('.rutvacio').hide();
        return false;
    } 	
});

//VALIDAR RUT// 
$("#idproovedor_inventario").blur(function() {
     
    var Objeto;
    Objeto=$("#idproovedor_inventario").val();
    var tmpstr = "";
    var intlargo = Objeto;
    
    if (intlargo.length> 0)
    {
      crut = Objeto;
      largo = crut.length;
      if ( largo <2 )
      {
       
        $('.rutinvalido').show();
        Condicionrut=0;
        return false;
      }
      for ( i=0; i <crut.length ; i++ )
      if ( crut.charAt(i) != ' ' && crut.charAt(i) != '.' && crut.charAt(i) != '-' )
      {
        tmpstr = tmpstr + crut.charAt(i);
      }
      rut = tmpstr;
      crut=tmpstr;
      largo = crut.length;
   
      if ( largo> 2 )
        rut = crut.substring(0, largo - 1);
      else
        rut = crut.charAt(0);
   
      dv = crut.charAt(largo-1);
   
      if ( rut == null || dv == null )
      return 0;
   
      var dvr = '0';
      suma = 0;
      mul  = 2;
   
      for (i= rut.length-1 ; i>= 0; i--)
      {
        suma = suma + rut.charAt(i) * mul;
        if (mul == 7)
          mul = 2;
        else
          mul++;
      }
   
      res = suma % 11;
      if (res==1)
        dvr = 'k';
      else if (res==0)
        dvr = '0';
      else
      {
        dvi = 11-res;
        dvr = dvi + "";
      }
   
      if ( dvr != dv.toLowerCase() )
      {
       
        $('.rutinvalido').show();
        Condicionrut=0;
        return false;
      }
      //alert('El Rut Ingresado es Correcto!')
      $('.rutinvalido').hide();
      Condicionrut=1;
      return true;

    }
});
//PRECIO PRODUCTO VACIO//
  // SOLO ACEPTE VALORES NUMERICOS
  $("#precioproducto_inventario").keydown(function(event) {
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
  $("#nombreproducto_inventario").blur(function() {
      var total;
      total=$("#nombreproducto_inventario").val().length;
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
  $("#cantidadproducto_inventario").keydown(function(event) {
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
  $("#imagenproducto").blur(function() {
    var total;
    total=$("#imagenproducto").val().length;
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
$("#marcoproducto").blur(function() {
    var total;
    total=$("#marcoproducto").val().length;
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
$("#colormarco").blur(function() {
    var total;
    total=$("#colormarco").val().length;
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
$("#materialmarco").blur(function() {
    var total;
    total=$("#materialmarco").val().length;
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
$("#generomarco").blur(function() {
    var total;
    total=$("#generomarco").val().length;
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
$("#edadmarco").blur(function() {
    var total;
    total=$("#edadmarco").val().length;
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
  
    
      if(Condicionrut==1 && Condicionnom==1 && Condicionimg==1 && Condicionmarco==1 && Condicioncolor==1 && Condicionmaterial==1 && Condiciongenero==1 && Condicionedad==1){
        $("#guardarnuevo").prop('disabled', false);
      }else{
        $("#guardarnuevo").prop('disabled', true);
      } 
  
  
    });
  
  
  
  
  //--------------FIN VALIDACIONES REGISTRO---------------------------------------//
  
  
    
        
  });