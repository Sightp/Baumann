<?php
require_once"../conexion.php";
$conexion= conexion();

 $id=$_POST['proid'];
 $prodescripcion=$_POST['prodescrip'];
 $proprecios=$_POST['proprecio'];
 $pronom=$_POST['pronombre'];
 $procant=$_POST['procantidad'];

 $sql="UPDATE `producto` SET `PRO_DESCRIPCION`='$prodescripcion',
                              `PRO_PRECIO`='$proprecios',
                              `PRO_NOMBRE`='$pronom',
                              `PRO_CANTIDAD`='$procant'
                              WHERE PRO_ID='$id'";

 echo $result=mysqli_query($conexion,$sql);
?>