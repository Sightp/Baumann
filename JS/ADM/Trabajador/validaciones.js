$(document).ready(function() { 

    //DECLARACIONES DE VARIABLES PARA VARIABLES VACIAS (AGREGAR)

    codigo_rut_vacio=0;
    codigo_nombre_vacio=0;
    codigo_paterno_vacio=0;
    codigo_telefono_vacio=0;
    codigo_ciudad_vacio=0;
    codigo_sucursal_vacio=0;
    codigo_rol_vacio=0;
    codigo_pass_vacio=0;
    codigo_pass_nueva_vacio=0;
    codigo_region_vacio=0;

    // DECLARACION DE VARIABLES PARA VARIABLES VACIAS (EDITAR)

    codigo_nombre_vacio_editar=0;
    codigo_paterno_vacio_editar=0;
    codigo_telefono_vacio_editar=0;
    codigo_ciudad_vacio_editar=0;
    codigo_sucursal_vacio_editar=0;
    codigo_rol_vacio_editar=0;
    codigo_pass_vacio_editar=0;
    codigo_region_vacio_editar=0;

    jQuery(function() {
        $('#AGREGAR_RUT_VACIO').hide();
        $('#AGREGAR_NOMBRE_VACIO').hide();
        $('#AGREGAR_APELLIDO_VACIO').hide();
        $('#AGREGAR_REGION_VACIO').hide();
        $('#AGREGAR_SUCURSAL_VACIO').hide();
        $('#AGREGAR_CIUDAD_VACIO').hide();
        $('#AGREGAR_ROL_VACIO').hide();
        $('#AGREGAR_TELEFONO_VACIO').hide();
        $('#AGREGAR_CONTRASEÑA_VACIO').hide();
        $('#AGREGAR_NUEVA_CONTRASEÑA_VACIO').hide();

        $('#AGREGAR_RUT_VALIDO').hide();
        $('#AGREGAR_CONTRASEÑA_DISTINTO').hide();
        $('#AGREGAR_CONTRASEÑA_DISTINTO1').hide();





        $("#guardarempleado").prop('disabled', true);
    
      });


      jQuery(function() {
        $('#AGREGAR_NOMBRE_VACIO_EDITAR').hide();
        $('#AGREGAR_APELLIDO_VACIO_EDITAR').hide();
        $('#AGREGAR_REGION_VACIO_EDITAR').hide();
        $('#AGREGAR_SUCURSAL_VACIO_EDITAR').hide();
        $('#AGREGAR_NOMBRE_VACIO_EDITAR').hide();
        $('#AGREGAR_CIUDAD_VACIO_EDITAR').hide();
        $('#AGREGAR_TELEFONO_VACIO_EDITAR').hide();
        $('#AGREGAR_CONTRASEÑA_VACIO_EDITAR').hide();
        $('#AGREGAR_ROL_VACIO_EDITAR').hide();



        $("#editardatosproveedores").prop('disabled', true);
    
      });


      /////////////////////VALIDACIONES DE CAMPOS VACIOS ////////////////777

    $("#Rut_empleado").blur(function() {
        var total;
        total=$("#Rut_empleado").val().length;
        if (total==0){
            $('#AGREGAR_RUT_VACIO').show();
            codigo_rut_vacio=0;
            return true;
        }
        else {
            $('#AGREGAR_RUT_VACIO').hide();
            codigo_rut_vacio=1;
            return false;
        } 	
    });

    $("#nombre_empleado").blur(function() {
        var total;
        total=$("#nombre_empleado").val().length;
        if (total==0){
            $('#AGREGAR_NOMBRE_VACIO').show();
            codigo_nombre_vacio=0;
            return true;
        }
        else {
            $('#AGREGAR_NOMBRE_VACIO').hide();
            codigo_nombre_vacio=1;
            return false;
        } 	
    });

    $("#paterno_empleado").blur(function() {
        var total;
        total=$("#paterno_empleado").val().length;
        if (total==0){
            $('#AGREGAR_APELLIDO_VACIO').show();
            codigo_paterno_vacio=0;
            return true;
        }
        else {
            $('#AGREGAR_APELLIDO_VACIO').hide();
            codigo_paterno_vacio=1;
            return false;
        } 	
    });
    $("#id_region").blur(function() {
        var total;
        total=document.getElementById("id_region").value;
        if (total==0){
            $('#AGREGAR_REGION_VACIO').show();
            codigo_region_vacio=0;
            return true;
        }
        else {
            $('#AGREGAR_REGION_VACIO').hide();
            codigo_region_vacio=1;
            return false;
        } 	
    });
    $("#id_su").blur(function() {
        var total;
        total=document.getElementById("id_su").value;
        if (total==0){
            $('#AGREGAR_SUCURSAL_VACIO').show();
            codigo_sucursal_vacio=0;
            return true;
        }
        else {
            $('#AGREGAR_SUCURSAL_VACIO').hide();
            codigo_sucursal_vacio=1;
            return false;
        } 	
    });
    $("#idciudad").blur(function() {
        var total;
        total=document.getElementById("idciudad").value;
        if (total==0){
            $('#AGREGAR_CIUDAD_VACIO').show();
            codigo_ciudad_vacio=0;
            return true;
        }
        else {
            $('#AGREGAR_CIUDAD_VACIO').hide();
            codigo_ciudad_vacio=1;
            return false;
        } 	
    });
    $("#rol").blur(function() {
        var total;
        total=document.getElementById("rol").value;
        if (total==0){
            $('#AGREGAR_ROL_VACIO').show();
            codigo_rol_vacio=0;
            return true;
        }
        else {
            $('#AGREGAR_ROL_VACIO').hide();
            codigo_rol_vacio=1;
            return false;
        } 	
    });
    $("#telefono_empleado").blur(function() {
        var total;
        total=$("#telefono_empleado").val().length;
        if (total==0){
            $('#AGREGAR_TELEFONO_VACIO').show();
            codigo_telefono_vacio=0;
            return true;
        }
        else {
            $('#AGREGAR_TELEFONO_VACIO').hide();
            codigo_telefono_vacio=1;
            return false;
        } 	
    });
    $("#contraseña_empleado").blur(function() {
        var total;
        total=$("#contraseña_empleado").val().length;
        if (total==0){
            $('#AGREGAR_CONTRASEÑA_VACIO').show();
            codigo_pass_vacio=0;
            return true;
        }
        else {
            $('#AGREGAR_CONTRASEÑA_VACIO').hide();
            codigo_pass_vacio=1;
            return false;
        } 	
    });
    $("#volver_contraseña_empleado").blur(function() {
        var total;
        total=$("#volver_contraseña_empleado").val().length;
        if (total==0){
            $('#AGREGAR_NUEVA_CONTRASEÑA_VACIO').show();
            codigo_pass_nueva_vacio=0;
            return true;
        }
        else {
            $('#AGREGAR_NUEVA_CONTRASEÑA_VACIO').hide();
            codigo_pass_nueva_vacio=1;
            return false;
        } 	
    });

/////////////////////// VALIDACIONES ////////////////////////////77777


//VALIDAR RUT// 
$("#Rut_empleado").blur(function() {
     
    var Objeto;
    Objeto=$("#Rut_empleado").val();
    var tmpstr = "";
    var intlargo = Objeto;
    
    if (intlargo.length> 0)
    {
      crut = Objeto;
      largo = crut.length;
      if ( largo <2 )
      {
       
        $('#AGREGAR_RUT_VALIDO').show();
        codigo_rut_vacio=0;
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
       
        $('#AGREGAR_RUT_VALIDO').show();
        codigo_rut_vacio=0;
        return false;
      }
      //alert('El Rut Ingresado es Correcto!')
      $('#AGREGAR_RUT_VALIDO').hide();
      codigo_rut_vacio=1;
      return true;

    }
});

  //VALIDAR QUE RUT SOLO ACEPTE VALORES NUMERIOS Y  
  $("#Rut_empleado").keydown(function(event) {
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

//tELEFONO  SOLO ACEPTE VALORES NUMERICOS  
$("#telefono_empleado").keydown(function(event) {
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


    ///////////////// VALIDACION DE QUE COINCIDAN LAS CONTRASEÑAS /////////////////

//VALIDAR QUE LAS CONTRASEÑAS COINCIDAN//
$("#contraseña_empleado").blur(function() {
    var pass,pass2;
    pass=$("#contraseña_empleado").val();
    pass2=$("#volver_contraseña_empleado").val();
    
    if(pass!=pass2){
      $('#AGREGAR_CONTRASEÑA_DISTINTO').show();
      $('#AGREGAR_CONTRASEÑA_VACIO').hide();
      codigo_pass_vacio=0;
      return true;
    }else 
    {
      $('#AGREGAR_CONTRASEÑA_DISTINTO').hide();
      codigo_pass_vacio=1;
      return false;
    }
    
  });

//VALIDAR QUE LAS CONTRASEÑAS COINCIDAN//
$("#volver_contraseña_empleado").blur(function() {
    var pass,pass2;
    pass=$("#contraseña_empleado").val();
    pass2=$("#volver_contraseña_empleado").val();
    
    if(pass!=pass2){
      $('#AGREGAR_CONTRASEÑA_DISTINTO1').show();
      $('#AGREGAR_NUEVA_CONTRASEÑA_VACIO').hide();
      codigo_pass_nueva_vacio=0;
      return true;
    }else 
    {
        codigo_pass_nueva_vacio=1;
      $('#AGREGAR_CONTRASEÑA_DISTINTO1').hide();
      return false;
    }
    
  });


////******CAMPOS VACIOS PARA EDITAR ************************* */

    $("#nombre_empleado1").blur(function() {
        var total;
        total=$("#nombre_empleado1").val().length;
        if (total==0){
            $('#AGREGAR_NOMBRE_VACIO_EDITAR').show();
            codigo_nombre_vacio_editar=0;
            return true;
        }
        else {
            $('#AGREGAR_NOMBRE_VACIO_EDITAR').hide();
            codigo_nombre_vacio_editar=1;
            return false;
        } 	
    });

    $("#paterno_empleado1").blur(function() {
        var total;
        total=$("#paterno_empleado1").val().length;
        if (total==0){
            $('#AGREGAR_APELLIDO_VACIO_EDITAR').show();
            codigo_paterno_vacio_editar=0;
            return true;
        }
        else {
            $('#AGREGAR_APELLIDO_VACIO_EDITAR').hide();
            codigo_paterno_vacio_editar=1;
            return false;
        } 	
    });
    $("#id_region1").blur(function() {
        var total;
        total=document.getElementById("id_region1").value;
        if (total==0){
            $('#AGREGAR_REGION_VACIO_EDITAR').show();
            codigo_region_vacio_editar=0;
            return true;
        }
        else {
            $('#AGREGAR_REGION_VACIO_EDITAR').hide();
            codigo_region_vacio_editar=1;
            return false;
        } 	
    });
    $("#id_su1").blur(function() {
        var total;
        total=document.getElementById("id_su1").value;
        if (total==0){
            $('#AGREGAR_SUCURSAL_VACIO_EDITAR').show();
            codigo_sucursal_vacio_editar=0;
            return true;
        }
        else {
            $('#AGREGAR_SUCURSAL_VACIO_EDITAR').hide();
            codigo_sucursal_vacio_editar=1;
            return false;
        } 	
    });
    $("#idciudadeditar1").blur(function() {
        var total;
        total=document.getElementById("idciudadeditar1").value;
        if (total==0){
            $('#AGREGAR_CIUDAD_VACIO_EDITAR').show();
            codigo_ciudad_vacio_editar=0;
            return true;
        }
        else {
            $('#AGREGAR_CIUDAD_VACIO_EDITAR').hide();
            codigo_ciudad_vacio_editar=1;
            return false;
        } 	
    });
    $("#rol1").blur(function() {
        var total;
        total=document.getElementById("rol1").value;
        if (total==0){
            $('#AGREGAR_ROL_VACIO_EDITAR').show();
            codigo_rol_vacio_editar=0;
            return true;
        }
        else {
            $('#AGREGAR_ROL_VACIO_EDITAR').hide();
            codigo_rol_vacio_editar=1;
            return false;
        } 	
    });
    $("#telefono_empleado1").blur(function() {
        var total;
        total=$("#telefono_empleado1").val().length;
        if (total==0){
            $('#AGREGAR_TELEFONO_VACIO_EDITAR').show();
            codigo_telefono_vacio_editar=0;
            return true;
        }
        else {
            $('#AGREGAR_TELEFONO_VACIO_EDITAR').hide();
            codigo_telefono_vacio_editar=1;
            return false;
        } 	
    });
    $("#contraseña_empleado1").blur(function() {
        var total;
        total=$("#contraseña_empleado1").val().length;
        if (total==0){
            $('#AGREGAR_CONTRASEÑA_VACIO_EDITAR').show();
            codigo_pass_vacio_editar=0;
            return true;
        }
        else {
            $('#AGREGAR_CONTRASEÑA_VACIO_EDITAR').hide();
            codigo_pass_vacio_editar=1;
            return false;
        } 	
    });



//tELEFONO  SOLO ACEPTE VALORES NUMERICOS  
$("#telefono_empleado1").keydown(function(event) {
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

  /////////// comparacion de campos

  
// PARA AGREGAR  
$(document).click(function(){

   

    


        if(codigo_rut_vacio==1 && codigo_nombre_vacio==1 && codigo_paterno_vacio==1 && codigo_telefono_vacio==1 && codigo_ciudad_vacio==1 && codigo_sucursal_vacio==1 && codigo_rol_vacio==1 && codigo_pass_vacio==1 &&   codigo_pass_nueva_vacio==1 &&   codigo_region_vacio==1)
        {
            $("#guardarempleado").prop('disabled', false);


        }
        else
        {
            $("#guardarempleado").prop('disabled', true);

            
        }
});

// PARA EDITAR 

$(document).click(function(){

   
    
    console.log(codigo_nombre_vacio_editar);
    console.log(codigo_paterno_vacio_editar);
    console.log(codigo_telefono_vacio_editar);
    console.log(codigo_sucursal_vacio_editar);
    console.log(codigo_ciudad_vacio_editar);
    console.log(codigo_rol_vacio_editar);
    console.log(codigo_region_vacio_editar);
    console.log(codigo_pass_vacio_editar);



    if(codigo_nombre_vacio_editar==1 && codigo_paterno_vacio_editar==1 && codigo_telefono_vacio_editar==1 && codigo_ciudad_vacio_editar==1 && codigo_sucursal_vacio_editar==1 && codigo_pass_vacio_editar==1 && codigo_rol_vacio_editar==1 && codigo_region_vacio_editar==1)
    {
        $("#editardatosproveedores").prop('disabled', false);


    }
    else
    {
        $("#editardatosproveedores").prop('disabled', true);

        
    }
});





});