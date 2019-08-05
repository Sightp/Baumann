$(document).ready(function() {

    //DECLARACIONES DE VARIABLES PARA VARIABLES VACIAS (AGREGAR)

    codigo_rut_vacio=0;
    codigo_nombre_vacio=0;
    codigo_paterno_vacio=0;
    codigo_materno_vacio=0;
    codigo_direccion_vacio=0;
    codigo_telefono_vacio=0;
    codigo_correo_vacio=0;
    codigo_ciudad_vacio=0;
    codigo_pass_vacio=0;
    codigo_pass_nueva_vacio=0;
    codigo_region_vacio=0;

    //DECLARACIONES DE VARIABLES PARA VARIABLES VACIAS (EDITAR)

        codigo_nombre_vacio_editar=0;
        codigo_paterno_vacio_editar=0;
        codigo_materno_vacio_editar=0;
        codigo_ciudad_vacio_editar=0;
        codigo_region_vacio_editar=0;
        codigo_telefono_vacio_editar=0;
        codigo_pass_vacio_editar=0;

      // DECLARACIONES DE VARIABLES PARA VALIDAR
      codigo_rut_valido=0;  
      codigo_contraseña_valido=0;
 

// OCULTO LOS MENSAJES DE ERROR AL AGREGAR 
    jQuery(function() {
        $("#AGREGAR_RUT_VACIO").hide();
        $("#AGREGAR_NOMBRE_VACIO").hide();
        $("#AGREGAR_PATERNO_VACIO").hide();
        $("#AGREGAR_MATERNO_VACIO").hide();
        $("#AGREGAR_REGION_VACIO").hide();
        $("#AGREGAR_CIUDAD_VACIO").hide();
        $("#AGREGAR_DIRECCION_VACIO").hide();
        $("#AGREGAR_TELEFONO_VACIO").hide();
        $("#AGREGAR_CORREO_VACIO").hide();
        $("#AGREGAR_CONTRASEÑA_VACIO").hide();
        $("#AGREGAR_NUEVA_CONTRASEÑA_VACIO").hide();

       $("#guardarcliente").prop('disabled', true);
    });

    // OCULTO LOS MENSAJES DE ERROR AL EDITAR 
    jQuery(function() {
        $("#AGREGAR_PATERNO_VACIO_EDITAR").hide();
        $("#AGREGAR_REGION_VACIO_EDITAR").hide();
        $("#AGREGAR_NOMBRE_VACIO_EDITAR").hide();
        $("#AGREGAR_MATERNO_VACIO_EDITAR").hide();
     

        $("#AGREGAR_CIUDAD_VACIO_EDITAR").hide();
        $("#AGREGAR_TELEFONO_VACIO_EDITAR").hide();
        $("#AGREGAR_CONTRASEÑA_VACIO_EDITAR").hide();

      // $("#editardatosproveedores").prop('disabled', true);
    });


    //******************* */ VALIDACIONES *******************
    
    //*************** RUT ********************* */
    $("#AGREGAR_RUT_VALIDO").hide();

    //****************CONTRASEÑA *****************+ */

    $("#AGREGAR_CONTRASEÑA_DISTINTO").hide();
    $("#AGREGAR_CONTRASEÑA_DISTINTO1").hide();


    
//*****************************************************************VALIDACIONES PARA AGREGAR ******************************************************************************** */

        // <************   VALIDAR QUE EL RUT NO SE ENCUENTRE VACIO  ******************************

        $("#rut_cliente").blur(function(){
            var cantidad;
            cantidad=$("#rut_cliente").val().length;
            if(cantidad==0)
            {
                $("#AGREGAR_RUT_VACIO").show();
                codigo_rut_vacio=0;
                return true;
            }
            else
            {
                $("#AGREGAR_RUT_VACIO").hide();
                codigo_rut_vacio=1;
                return false;
        
            }
        
        });
         // <************   VALIDAR QUE LA NOMBRE NO SE ENCUENTRE VACIO  ******************************
         
        $("#nombre_cliente").blur(function(){
            var cantidad;
            cantidad=$("#nombre_cliente").val().length;
            if(cantidad==0)
            {
                $("#AGREGAR_NOMBRE_VACIO").show();
                codigo_nombre_vacio=0;
                return true;
            }
            else
            {
                $("#AGREGAR_NOMBRE_VACIO").hide();
                codigo_nombre_vacio=1;
                return false;
        
            }
        
        });
        // <************   VALIDAR QUE LA APELLIDO PATERNO NO SE ENCUENTRE VACIO  ******************************
        $("#paterno_cliente").blur(function(){
            var cantidad;
            cantidad=$("#paterno_cliente").val().length;
            if(cantidad==0)
            {
                $("#AGREGAR_PATERNO_VACIO").show();
                codigo_paterno_vacio=0;
                return true;
            }
            else
            {
                $("#AGREGAR_PATERNO_VACIO").hide();
                codigo_paterno_vacio=1;
                return false;
        
            }
        
        });
        // <************   VALIDAR QUE LA APELLIDO MATERNO  NO SE ENCUENTRE VACIO  ******************************
        $("#materno_cliente").blur(function(){
            var cantidad;
            cantidad=$("#materno_cliente").val().length;
            if(cantidad==0)
            {
                $("#AGREGAR_MATERNO_VACIO").show();
                codigo_materno_vacio=0;
                return true;
            }
            else
            {
                $("#AGREGAR_MATERNO_VACIO").hide();
                codigo_materno_vacio=1;
                return false;
        
            }
        
        });
        // <************   VALIDAR QUE LA REGION NO SE ENCUENTRE VACIO  ******************************
        $("#id_region").blur(function(){
            var cantidad;
            cantidad=document.getElementById("id_region").value;
            if(cantidad==0)
            {
                $("#AGREGAR_REGION_VACIO").show();
                codigo_region_vacio=0;
                return true;
            }
            else
            {
                $("#AGREGAR_REGION_VACIO").hide();
                codigo_region_vacio=1;
                return false;
        
            }
        
        });
        // <************   VALIDAR QUE LA CIUDAD NO SE ENCUENTRE VACIO  ******************************
        $("#idciudad").blur(function(){
            var cantidad;
            cantidad= document.getElementById("idciudad").value;
            if(cantidad==0)
            {
                $("#AGREGAR_CIUDAD_VACIO").show();
                codigo_ciudad_vacio=0;
                return true;
            }
            else
            {
                $("#AGREGAR_CIUDAD_VACIO").hide();
                codigo_ciudad_vacio=1;
                return false;
        
            }
        
        });
        // <************   VALIDAR QUE LA DIRECCION NO SE ENCUENTRE VACIO  ******************************
        $("#direccion_cliente").blur(function(){
            var cantidad;
            cantidad=$("#direccion_cliente").val().length;
            if(cantidad==0)
            {
                $("#AGREGAR_DIRECCION_VACIO").show();
                codigo_direccion_vacio=0;
                return true;
            }
            else
            {
                $("#AGREGAR_DIRECCION_VACIO").hide();
                codigo_direccion_vacio=1;
                return false;
        
            }
        
        });
        // <************   VALIDAR QUE LA TELEFONO NO SE ENCUENTRE VACIO  ******************************
        $("#telefono_cliente").blur(function(){
            var cantidad;
            cantidad=$("#telefono_cliente").val().length;
            if(cantidad==0)
            {
                $("#AGREGAR_TELEFONO_VACIO").show();
                codigo_telefono_vacio=0;
                return true;
            }
            else
            {
                $("#AGREGAR_TELEFONO_VACIO").hide();
                codigo_telefono_vacio=1;
                return false;
        
            }
        
        });
        // <************   VALIDAR QUE LA CORREO NO SE ENCUENTRE VACIO  ******************************
        $("#correo_cliente").blur(function(){
            var cantidad;
            cantidad=$("#correo_cliente").val().length;
            if(cantidad==0)
            {
                $("#AGREGAR_CORREO_VACIO").show();
                codigo_correo_vacio=0;
                return true;
            }
            else
            {
                $("#AGREGAR_CORREO_VACIO").hide();
                codigo_correo_vacio=1;
                return false;
        
            }
        
        });
        // <************   VALIDAR QUE LA CONTRASEÑA NO SE ENCUENTRE VACIO  ******************************
        $("#contraseña_cliente").blur(function(){
            var cantidad;
            cantidad=$("#contraseña_cliente").val().length;
            if(cantidad==0)
            {
                $("#AGREGAR_CONTRASEÑA_VACIO").show();
                codigo_pass_vacio=0;
                return true;
            }
            else
            {
                $("#AGREGAR_CONTRASEÑA_VACIO").hide();
                codigo_pass_vacio=1;
                return false;
        
            }
        
        });
        // <************   VALIDAR QUE LA NUEVA CONTRASEÑA NO SE ENCUENTRE VACIO  ******************************
        $("#volver_contraseña_cliente").blur(function(){
            var cantidad;
            cantidad=$("#volver_contraseña_cliente").val().length;
            if(cantidad==0)
            {
                $("#AGREGAR_NUEVA_CONTRASEÑA_VACIO").show();
                codigo_pass_nueva_vacio=0;
                return true;
            }
            else
            {
                $("#AGREGAR_NUEVA_CONTRASEÑA_VACIO").hide();
                codigo_pass_nueva_vacio=1;
                return false;
        
            }
        
        });


///////////****************VALIDAR  RUT ************ */

//VALIDAR RUT// 
$("#rut_cliente").blur(function() {
     
    var Objeto;
    Objeto=$("#rut_cliente").val();
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
  $("#rut_cliente").keydown(function(event) {
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
$("#telefono_cliente").keydown(function(event) {
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
$("#contraseña_cliente").blur(function() {
    var pass,pass2;
    pass=$("#contraseña_cliente").val();
    pass2=$("#volver_contraseña_cliente").val();
    
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
$("#volver_contraseña_cliente").blur(function() {
    var pass,pass2;
    pass=$("#contraseña_cliente").val();
    pass2=$("#volver_contraseña_cliente").val();
    
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

  
//*****************************************************************FIN VALIDACIONES  PARA AGREGAR ******************************************************************************** */


//*****************************************************************VALIDACIONES PARA EDITAR ******************************************************************************** */

   // <************   VALIDAR QUE LA NOMBRE NO SE ENCUENTRE VACIO  ******************************
         
        $("#nombre_cliente1").blur(function(){
            var cantidad;
            cantidad=$("#nombre_cliente1").val().length;
            if(cantidad==0)
            {
                $("#AGREGAR_NOMBRE_VACIO_EDITAR").show();
                codigo_nombre_vacio_editar=0;
                return true;
            }
            else
            {
                $("#AGREGAR_NOMBRE_VACIO_EDITAR").hide();
                codigo_nombre_vacio_editar=1;
                return false;

            }

        });
// <************   VALIDAR QUE LA APELLIDO PATERNO NO SE ENCUENTRE VACIO  ******************************
        $("#paterno_cliente1").blur(function(){
            console.log("entra a validar")

            var cantidad;
            cantidad=$("#paterno_cliente1").val().length;
            console.log(cantidad);
            if(cantidad==0)
            {
                $("#AGREGAR_PATERNO_VACIO_EDITAR").show();
                codigo_paterno_vacio_editar=0;
                return true;
            }
            else
            {
                $("#AGREGAR_PATERNO_VACIO_EDITAR").hide();
                codigo_paterno_vacio_editar=1;
                return false;

            }

        });
// <************   VALIDAR QUE LA APELLIDO MATERNO  NO SE ENCUENTRE VACIO  ******************************


$("#materno_cliente1").blur(function(){
    var c;
    c=$("#materno_cliente1").val().length;
    console.log($("#materno_cliente1").val());
    if(c==0)
    {
        $("#AGREGAR_MATERNO_VACIO_EDITAR").show();
        codigo_materno_vacio_editar=0;
        return true;
    }
    else
    {
        $("#AGREGAR_MATERNO_VACIO_EDITAR").hide();
        codigo_materno_vacio_editar=1;
        return false;

    }

});
     
// <************   VALIDAR QUE LA REGION NO SE ENCUENTRE VACIO  ******************************
        $("#id_region1").blur(function(){
            var cantidad;
            cantidad=document.getElementById("id_region1").value;
            if(cantidad==0)
            {
                $("#AGREGAR_REGION_VACIO_EDITAR").show();
                codigo_region_vacio_editar=0;
                return true;
            }
            else
            {
                $("#AGREGAR_REGION_VACIO_EDITAR").hide();
                codigo_region_vacio_editar=1;
                return false;

            }

        });
// <************   VALIDAR QUE LA CIUDAD NO SE ENCUENTRE VACIO  ******************************
        $("#idciudadeditar").blur(function(){
            var cantidad;
            cantidad= document.getElementById("idciudadeditar").value;
            if(cantidad==0)
            {
                $("#AGREGAR_CIUDAD_VACIO_EDITAR").show();
                codigo_ciudad_vacio_editar=0;
                return true;
            }
            else
            {
                $("#AGREGAR_CIUDAD_VACIO_EDITAR").hide();
                codigo_ciudad_vacio_editar=1;
                return false;

            }

        });
  // <************   VALIDAR QUE LA CONTRASEÑA NO SE ENCUENTRE VACIO  ******************************
         $("#contraseña_cliente1").blur(function(){
                    var cantidad;
                    cantidad=$("#contraseña_cliente1").val().length;
                    if(cantidad==0)
                    {
                        $("#AGREGAR_CONTRASEÑA_VACIO_EDITAR").show();
                        codigo_pass_vacio_editar=0;
                        return true;
                    }
                    else
                    {
                        $("#AGREGAR_CONTRASEÑA_VACIO_EDITAR").hide();
                        codigo_pass_vacio_editar=1;
                        return false;
                
                    }
                
                });
  
 // <************   VALIDAR QUE EL TELEFONO NO SE ENCUENTRE VACIO  ******************************
        $("#telefono_cliente1").blur(function(){
            var cantidad;
            cantidad=$("#telefono_cliente1").val().length;
            if(cantidad==0)
            {
                $("#AGREGAR_TELEFONO_VACIO_EDITAR").show();
                codigo_telefono_vacio_editar=0;
                return true;
            }
            else
            {
                $("#AGREGAR_TELEFONO_VACIO_EDITAR").hide();
                codigo_telefono_vacio_editar=1;
                return false;

            }

        });


    //////////////////////////////////7 VALIDAR TELEFONO PARA EDITAR /////////////////////////777777

//tELEFONO  SOLO ACEPTE VALORES NUMERICOS  
$("#telefono_cliente1").keydown(function(event) {
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


//*****************************************************************FIN VALIDACIONES  PARA EDITAR ******************************************************************************** */





//************************************************************VALIDACION DE CAMPOS ************************************************************ */

/// PARA AGREGAR 

$(document).click(function(){

   




        if(codigo_rut_vacio==1 && codigo_nombre_vacio==1 && codigo_paterno_vacio==1 && codigo_materno_vacio==1 && codigo_direccion_vacio==1 && codigo_telefono_vacio==1 && codigo_correo_vacio==1 && codigo_ciudad_vacio==1 && codigo_pass_vacio==1 && codigo_region_vacio==1 && codigo_pass_nueva_vacio==1   )
        {
            $("#guardarcliente").prop('disabled', false);


        }
        else
        {
            $("#guardarcliente").prop('disabled', true);

            
        }
});






// PARA EDITAR 
$(document).click(function(){

   

    console.log(codigo_nombre_vacio_editar);
    console.log(codigo_paterno_vacio_editar);
    console.log(codigo_materno_vacio_editar);
    console.log(codigo_ciudad_vacio_editar);
    console.log(codigo_region_vacio_editar);
    console.log(codigo_telefono_vacio_editar);
    console.log(codigo_pass_vacio_editar);




        if(codigo_nombre_vacio_editar==1 && codigo_paterno_vacio_editar==1 && codigo_materno_vacio_editar==1 && codigo_ciudad_vacio_editar==1 && codigo_region_vacio_editar==1 && codigo_telefono_vacio_editar==1 && codigo_pass_vacio_editar==1)
        {
            $("#editardatosproveedores").prop('disabled', false);


        }
        else
        {
            $("#editardatosproveedores").prop('disabled', true);

            
        }
});




//****************************************************************** FIN VALIDACION DE CAMPOS */


});

