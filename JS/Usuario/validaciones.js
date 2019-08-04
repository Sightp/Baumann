

$(document).ready(function() {

  Condicionnom=0;
  CondicionapP=0;
  Condicionrut=0;
  CondicionapM=0
  Condicioncorreo=0;
  Condicioncontraseña=0

  jQuery(function() {
    $('.nomvacio').hide();
    $('.patvacio').hide();
    $('.matvacio').hide();
    $('.rutvacio').hide();
    $('.rutinvalido').hide();
    $('.emailvacio').hide();
    $('.passvacio').hide();
    $('.passigual').hide();
    $("#guardarnuevo").prop('disabled', true);

  });
  
//--------------VALIDACIONES PARA LA SECCION DE REGISTRO------------------------//


//NOMBRE VACIO//
$("#nombre").blur(function() {
    var total;
    total=$("#nombre").val().length;
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

//APELLIDO PATERNO VACIO//
$("#apellidoP").blur(function() {
    var total;
    total=$("#apellidoP").val().length;
    if (total==0){
        $('.patvacio').show();
        CondicionapP=0;
        return true;
    }
    else {
        $('.patvacio').hide();
        CondicionapP=1;
        return false;
    } 	
});

//RUT VACIO//
$("#idrut").blur(function() {
    var totalM;
    totalM=$("#idrut").val().length;
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


$("#apellidoM").blur(function() {
  var totalM;
  totalM=$("#apellidoM").val().length;
  if (totalM==0){
      $('.matvacio').show();
      CondicionapM=0;
      return true;
  }
  else {
      CondicionapM=1;
      $('.matvacio').hide();
      return false;
  } 	
});

//VALIDAR RUT// 
$("#idrut").blur(function() {
     
    var Objeto;
    Objeto=$("#idrut").val();
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


//CORREO NO VACIO//
$("#idcorreo").blur(function() {
    var total;
    total=$("#idcorreo").val().length;
    if (total==0){
        Condicioncorreo=0;
        $('.emailvacio').show();
        return true;
    }
    else {
        Condicioncorreo=1;
        $('.emailvacio').hide();
        return false;
    } 	
});


//CONTRASEÑA NO VACIA//
$("#idpass").blur(function() {
  var total;
  total=$("#idpass").val().length;
  if (total==0){
      $('.passvacio').show();
      $('.passigual').hide();
      return true;
  }
  else {
      $('.passvacio').hide();
      return false;
  } 	
});





//VALIDAR QUE LAS CONTRASEÑAS COINCIDAN//
$("#idpass").blur(function() {
  var pass;
  pass=$("#idpass").val();
  pass2=$("#idpassconfirmacion").val();
  
  if(pass!=pass2){
    $('.passigual').show();
    $('.passvacio').hide();
    Condicioncontraseña=0;
    return true;
  }else 
  {
    $('.passigual').hide();
    Condicioncontraseña=1;
    return false;
  }
  
});

//VALIDAR QUE LAS CONTRASEÑAS COINCIDAN//
$("#idpassconfirmacion").blur(function() {
  var pass;
  pass=$("#idpass").val();
  pass2=$("#idpassconfirmacion").val();
  
  if(pass!=pass2){
    $('.passigual').show();
    $('.passvacio').hide();
    Condicioncontraseña=0;
    return true;
  }else 
  {
    Condicioncontraseña=1;
    $('.passigual').hide();
    return false;
  }
  
});

//NUMEROS SOLO ACEPTE VALORES 
$("#idtelefono").keydown(function(event) {
  if(event.shiftKey)
  {
    event.preventDefault();
  }

  if ((event.keyCode >47  && event.keyCode < 58 || event.keyCode==8 )){      
  }else{
      alertify.error('Este campo solo acepta números');
      event.preventDefault();
  }
  });


  //VALIDAR QUE RUT SOLO ACEPTE VALORES NUMERIOS Y  
$("#idrut").keydown(function(event) {
  if(event.shiftKey)
  {
    event.preventDefault();
  }

  if ((event.keyCode >47  && event.keyCode < 58 || event.keyCode==8 || event.keyCode==75)){      
  }else{
      alertify.error('Este campo solo acepta números');
      event.preventDefault();
  }
  });

//VALIDACION DE CAMPOS VACIOS//


$(document).click(function() {

  
	if(Condicionnom==1 && CondicionapP==1 && Condicionrut==1 && CondicionapM==1 && Condicioncorreo==1 && Condicioncontraseña==1){
	  $("#guardarnuevo").prop('disabled', false);
	}else{
	  $("#guardarnuevo").prop('disabled', true);
	} 


  });




//--------------FIN VALIDACIONES REGISTRO---------------------------------------//


  
      
});