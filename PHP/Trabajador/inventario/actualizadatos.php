<?php
require_once"../../conexion.php";
$conexion= conexion();

 $id=$_POST['proid'];
 $proprecios=$_POST['proprecio'];
 $pronom=$_POST['pronombre'];
 $procant=$_POST['procantidad'];
 $proimg=$_POST['proimagen'];
 $promarco=$_POST['promarco'];
 $procolor=$_POST['procolor'];
 $promaterial=$_POST['promaterial'];
 $progenero=$_POST['progenero'];
 $proedad=$_POST['proedad'];


 $sql="UPDATE PRODUCTO SET  PRO_PRECIO='$proprecios',
                            PRO_NOMBRE='$pronom',
                            PRO_CANTIDAD='$procant',
                            PRO_IMAGEN='$proimg',
                            PRO_MARCO='$promarco',
                            PRO_MARCOLOR='$procolor',
                            PRO_MATERIAL='$promaterial',
                            PRO_GENERO='$progenero',
                            PRO_EDAD='$proedad'
                            WHERE PRO_ID='$id'";

 echo $result=mysqli_query($conexion,$sql);
?>