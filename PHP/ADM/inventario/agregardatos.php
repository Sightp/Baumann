<?php
require_once"../../conexion.php";
$conexion= conexion();

 $id=$_POST['proid'];
 $marcaid=$_POST['marid'];
 $sucuid=$_POST['sucid'];
 $abastid=$_POST['abaid'];
 $proprecios=$_POST['proprecio'];
 $pronom=$_POST['pronombre'];
 $procant=$_POST['procantidad'];
 $proimg=$_POST['proimagen'];
 $promarco=$_POST['promarco'];
 $procolor=$_POST['procolor'];
 $promaterial=$_POST['promaterial'];
 $progenero=$_POST['progenero'];
 $proedad=$_POST['proedad'];

 $sql="INSERT INTO PRODUCTO(PRO_ID, MAR_ID, SUC_ID, ABA_ID, PRO_PRECIO, PRO_NOMBRE, PRO_CANTIDAD, 
                            PRO_IMAGEN, PRO_MARCO, PRO_MARCOLOR, PRO_MATERIAL, PRO_GENERO, PRO_EDAD) 
 VALUES ('$id','$marcaid','$sucuid','$abastid','$proprecios','$pronom','$procant','$proimg','$promarco','$procolor','$promaterial','$progenero','proedad')";

 echo $result=mysqli_query($conexion,$sql);
?>