<?php
require_once"../conexion.php";
$conexion= conexion();

 $id=$_POST['proid'];
 $marcaid=$_POST['marid'];
 $sucuid=$_POST['sucid'];
 $abastid=$_POST['abaid'];
 $prodescripcion=$_POST['prodescrip'];
 $proprecios=$_POST['proprecio'];
 $pronom=$_POST['pronombre'];
 $procant=$_POST['procantidad'];

 $sql="INSERT INTO producto(PRO_ID, MAR_ID, SUC_ID, ABA_ID, PRO_DESCRIPCION, PRO_PRECIO, PRO_NOMBRE, PRO_CANTIDAD) 
 VALUES ('$id','$marcaid','$sucuid','$abastid','$prodescripcion','$proprecios','$pronom','$procant')";

 echo $result=mysqli_query($conexion,$sql);
?>