<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../Librerias/Boostrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../Librerias/js/jquery-3.2.1.min.js"></script>
    <script src="../../JS/Usuario/validaciones.js"></script> 
    <script src="../../JS/Usuario/registrar.js"></script> 
    
   

    <title>Registro Cliente</title>
</head>
<body>

    <div class="container">
    
        <div class="row">
            <h1 align="center">Crear Cuenta</h1>
        </div>

       
        <div class="form-group vacio">   
            <input type="text" class="form-control" placeholder="Nombre" id="nombre">    
        </div>
        
       
        
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">  
                    <input type="text" class="form-control" placeholder="Apellido Paterno:" id="apellidoP">
                </div>
            </div>
           
            <div class="col-lg-6">
                <div class="form-group"> 
                    <input type="text" class="form-control" placeholder="Apellido Materno:" id="apellidoM"> 
                </div>
            </div>
        </div>

        <div class="form-group">          
            <input type="text" class="form-control" placeholder="Rut:" id="idrut">   
        </div>

        
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">  
                    <input type="email" class="form-control" placeholder="Correo:" id="idcorreo">
                 </div>
            </div>
               
            <div class="col-lg-6">
                <div class="form-group"> 
                    <input type="text" class="form-control" placeholder="Télefono:" id="idtelefono">
                </div>
            </div>
        </div>

    
        <div class="form-group">          
            <div class="row">
                <div class="col-lg-12">
                    <input type="text" class="form-control" placeholder="Dirección:" id="iddireccion">
                </div>   
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">  
                    <label>Región</label>
                    <select class="form-control" id="idregion">
                        
                    </select>
                </div>
            </div>
               
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Ciudad</label> 
                    <select class="form-control" id="idciudad">
                        
                    </select>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">  
                    <input type="password" class="form-control" placeholder="Contraseña:" id="idpass">
                </div>
            </div>
                   
            <div class="col-lg-6">
                <div class="form-group"> 
                    <input type="password" class="form-control" placeholder="Repita Contraseña:" id="idpassconfirmacion">
                </div>
            </div>
        </div>


        <div class="form-group">          
            <div class="row">
                <div class="col-lg-12">
                    <label class="checkbox-inline"><input type="checkbox" value="">Acepta términos y condiciones</label>
                </div>   
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">  
                        <button  class="btn btn-block btn-success"  type="submit" id="guardarnuevo">Registrar </button>
                </div>
            </div>
                       
            <div class="col-lg-6">
                <div class="form-group">
                        <button  class="btn btn-block btn-primary"  type="submit">Iniciar Sesión </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ENVIAR DATOS PARA INSERTAR EN LA BD-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#guardarnuevo').click(function(){
              nombre=$('#nombre').val();
              apellidoP=$('#apellidoP').val();
              apellidoM=$('#apellidoM').val();
              rut=$('#idrut').val();
              correo=$('#idcorreo').val();
              telefono=$('#idtelefono').val();
              direccion=$('#iddireccion').val();
              ciudad=document.getElementById("idciudad").value;
              pass=$('#idpass').val();
              agregardatos(rut,nombre,apellidoP,apellidoM,pass,direccion,telefono,correo,ciudad);
            }); 
        });
    </script>

    <!--LLENAR SELECT PARA MOSTRAR REGION-->
    <script language="JavaScript" type="text/JavaScript">
        $(document).ready(function(){
                $("#idregion").load('../../PHP/Usuario/llenarregion.php');
        });
    </script>

    <!--CARGAR LA CIUDAD DEPENDIENDO DE LA REGION-->
    <script type="text/javascript">
	$(document).ready(function(){
		$('#idregion').val(1);
		recargarLista();

		$('#idregion').change(function(){
			recargarLista();
		});
    })
    </script>

    <script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"../../PHP/Usuario/llenarciudad.php",
			data:"region=" + $('#idregion').val(),
			success:function(r){
				$('#idciudad').html(r);
			}
		});
	}
    </script>


</html>
