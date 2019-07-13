


$(document).ready(function() {


//--------------VALIDACIONES PARA LA SECCION DE REGISTRO------------------------//


//NOMBRE VACIO//
$("#nombre").blur(function() {
    var total;
    total=$("#nombre").val().length;
    if (total==0){
        alert("Nombre no puede estar vacio");
        return true;
    }
    else {
        return false;
    } 	
});

//APELLIDO PATERNO VACIO//
$("#apellidoP").blur(function() {
    var total;
    total=$("#apellidoP").val().length;
    if (total==0){
        alert("Apellido Paterno no puede estar vacio");
        return true;
    }
    else {
        return false;
    } 	
});

//APELLIDO MATERNO VACIO//
$("#apelllidoM").blur(function() {
    var total;
    total=$("#apelllidoM").val().length;
    if (total==0){
        alert("Apellido Materno no puede estar vacio");
        return true;
    }
    else {
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
        alert('rut inválido')
        $('.rut_error').show();
        CondicionRut=0;
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
        alert('El Rut Ingreso es Invalido')
        $('.rut_error').show();
        CondicionRut=0;
        return false;
      }
      //alert('El Rut Ingresado es Correcto!')
      $('.rut_error').hide();
      CondicionRut=1;
      return true;
    }
});

//APELLIDO MATERNO VACIO//
$("#idcorreo").blur(function() {
    var total;
    total=$("#idcorreo").val().length;
    if (total==0){
        alert("Correo no puede estar vacio");
        return true;
    }
    else {
        return false;
    } 	
});





//--------------FIN VALIDACIONES REGISTRO---------------------------------------//


  
      
  });