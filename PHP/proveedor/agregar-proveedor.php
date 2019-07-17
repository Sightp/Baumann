
<?php
        include('conexionbdd.php');

            if (isset($_POST['rut']))
            {
                $rut = $_POST['rut'];
                $description =$_POST['description'];
                $telefono = $_POST['telefono'];
                $correo =$_POST['correo'];
             
                $query ="INSERT into abastecedor (ABA_NOMBRE,ABA_ID,ABA_TELEFONO,ABA_CORREO) VALUES ('$description','$rut','$telefono','$correo')";

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
                echo 'no se mete al if agregar-proveedor';
            }

    
    

        
        
   
?>
