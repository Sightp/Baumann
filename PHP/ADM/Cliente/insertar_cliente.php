
<?php
        include('conexionbdd.php');




        
        

            if (isset($_POST['rut']))
            {
                $rut = $_POST['rut'];
                $nombre =$_POST['nombre'];
                $paterno = $_POST['paterno'];
                $materno =$_POST['materno'];
                $ciudad = $_POST['ciudad'];
                $direccion =$_POST['direccion'];
                $telefono = $_POST['telefono'];
                $correo =$_POST['correo'];
                $contraseña = $_POST['contraseña'];
             
                $query ="INSERT into CLIENTE (CLI_RUT,CLI_NOMBRE,CLI_PATERNO,CLI_MATERNO,CLI_PASS,CLI_DIRECCION,CLI_TELEFONO,CLI_CORREO,ID_CARRO,CIU_ID) VALUES ('$rut','$nombre','$paterno','$materno','$contraseña','$direccion','$telefono','$correo',2,$ciudad)";

               $result = mysqli_query($conn,$query);
                 if (!$result)
                 {
                     echo('fail');
                 }
                 else{
                    echo '0';
                 }
                
            }
            else 
            {
                echo 'no semete al if';
            }

    
    

        
        
   
?>
