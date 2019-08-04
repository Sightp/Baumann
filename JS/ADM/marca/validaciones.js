$(document).ready(function() {



    // declaracion de variables para agregar marca
    codigo_marca_vacio=0;
    codigo_marca_MAX=0;
    nombre_marca_vacio=0;
    nombre_marca_MAX=0;
 // declaracion de variables para editar 
 codigo_marca_vacio_editar=0;
    codigo_marca_MAX_editar=0;
    nombre_marca_vacio_editar=0;
    nombre_marca_MAX_editar=0;

    // Oculto los  mensajes de error de agregar 
    jQuery(function() {
        $("#ID_MARCA_VACIO").hide();
        $("#ID_MARCA_MAX").hide();
        $("#ID_MARCA_NUMERO").hide();
        $("#NOMBRE_MARCA_VACIO").hide();
        $("#NOMBRE_MARCA_MAX").hide();
        $("#agregarnuevo").prop('disabled', true);
    });



         // Oculto los  mensajes de error de editar 
         $("#ID_MARCA_VACIO_EDITAR").hide();
         $("#ID_MARCA_MAX_EDITAR").hide();
         $("#NOMBRE_MARCA_VACIO_EDITAR").hide();
         $("#NOMBRE_MARCA_MAX_EDITAR").hide();
         $("#actualizardatos").prop('disabled', true);


//*****************************************************************VALIDACIONES PARA AGREGAR ******************************************************************************** */

        // <************   VALIDAR QUE LA MARCA NO SE ENCUENTRE VACIO  

$("#codigo_marca").blur(function(){
    var cantidad;
    cantidad=$("#codigo_marca").val().length;
    if(cantidad==0)
    {
        $("#ID_MARCA_VACIO").show();
        codigo_marca_vacio=0;
        return true;
    }
    else
    {
        $("#ID_MARCA_VACIO").hide();
        codigo_marca_vacio=1;
        return false;

    }

});

// VALIDAR QUE LA MARCA NO SEA MAYOR A 15 CARACTERES

$("#codigo_marca").blur(function(){
        var cantidad;
        cantidad=$("#codigo_marca").val().length;
        if(cantidad>=15)
        {
            $("#ID_MARCA_MAX").show();
            codigo_marca_MAX=0;
            return true;



        }
        else
        {
            $("#ID_MARCA_MAX").hide();
            codigo_marca_MAX=1;
            return false;



        }
});

/// VALIDACION DE QUE EL NOMBRE NO SE ENCUENTRA 

$("#nombre_marca").blur(function(){
    var cantidad;
    cantidad=$("#nombre_marca").val().length;
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

$("#nombre_marca").blur(function(){
    var cantidad;
    cantidad=$("#nombre_marca").val().length;
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

// VALIDAR QUE LA ID SOLO SEA NUMERO 

//NUMEROS SOLO ACEPTE VALORES 

$("#codigo_marca").keydown(function(event) {
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
  


////////////////////////VALIDACION DE LOS CAMPOS ///////////////////////////////////7

$(document).click(function(){
 //   $("#agregarnuevo").prop('disabled', true);

    /*
    console.log(codigo_marca_vacio);
    console.log(codigo_marca_MAX);
    console.log(nombre_marca_vacio);
    console.log(nombre_marca_MAX);
*/
        if(codigo_marca_vacio==1 && codigo_marca_MAX==1 && nombre_marca_vacio==1 && nombre_marca_MAX==1 )
        {
            $("#agregarnuevo").prop('disabled', false);

        }
        else
        {
           $("#agregarnuevo").prop('disabled', true);

            
        }
});

//************************************************************FIN VALIDACIONES PARA AGREGAR **************************************************** */


//***************************************************************INICIO VALIDACIONES PARA EDITAR *********************************************************** */

        // <************   VALIDAR QUE LA MARCA NO SE ENCUENTRE VACIO  

        $("#codigou").blur(function(){
            var cantidad;
            cantidad=$("#codigou").val().length;
            if(cantidad==0)
            {
                $("#ID_MARCA_VACIO_EDITAR").show();
                codigo_marca_vacio_editar=0;
                return true;
            }
            else
            {
                $("#ID_MARCA_VACIO_EDITAR").hide();
                codigo_marca_vacio_editar=1;
                return false;
        
            }
        
        });
        
        // VALIDAR QUE LA MARCA NO SEA MAYOR A 15 CARACTERES
        
        $("#codigou").blur(function(){
                var cantidad;
                cantidad=$("#codigou").val().length;
                if(cantidad>=15)
                {
                    $("#ID_MARCA_MAX_EDITAR").show();
                    codigo_marca_MAX_editar=0;
                    return true;
        
        
        
                }
                else
                {
                    $("#ID_MARCA_MAX_EDITAR").hide();
                    codigo_marca_MAX_editar=1;
                    return false;
        
        
        
                }
        });
        
        /// VALIDACION DE QUE EL NOMBRE NO SE ENCUENTRA 
        
        $("#nombreu").blur(function(){
            var cantidad;
            cantidad=$("#nombreu").val().length;
            console.log(cantidad);
            if(cantidad==0)
            {
                $("#NOMBRE_MARCA_VACIO_EDITAR").show();
                nombre_marca_vacio_editar=0;
                return true;
            }
            else
            {
                $("#NOMBRE_MARCA_VACIO_EDITAR").hide();
                nombre_marca_vacio_editar=1;
                return false;
        
            }
        
        });
        
        // VALIDAR QUE el nombre NO SEA MAYOR A 15 CARACTERES
        
        $("#nombreu").blur(function(){
            var cantidad;
            cantidad=$("#nombreu").val().length;
            if(cantidad>=15)
            {
                $("#NOMBRE_MARCA_MAX_EDITAR").show();
                nombre_marca_MAX_editar=0;
                return true;
        
        
        
            }
            else
            {
                $("#NOMBRE_MARCA_MAX_EDITAR").hide();
                nombre_marca_MAX_editar=1;
                return false;
        
        
        
            }
        });
        
        // VALIDAR QUE LA ID SOLO SEA NUMERO 
        
        //NUMEROS SOLO ACEPTE VALORES 
        
        $("#codigou").keydown(function(event) {
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
          



            $(document).click(function(){
                $("#actualizardatos").prop('disabled', true);

                console.log(codigo_marca_vacio_editar);
                console.log(codigo_marca_MAX_editar);
                console.log(nombre_marca_vacio_editar);
                console.log(nombre_marca_MAX_editar);
            
                    if(nombre_marca_vacio_editar==1 && nombre_marca_MAX_editar==1 )
                    {
                        $("#actualizardatos").prop('disabled', false);

            
                    }
                    else
                    {
                        $("#actualizardatos").prop('disabled', true);
            
                        
                    }
            });
            

//*****************************************************************FIN VALIDACIONES PARA EDITAR *********************************************************************** */
});

