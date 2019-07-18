<?php
    session_start();
    require_once "../conexion.php";
    $conexion=conexion();

?>

<table class="table table-hover table-condensed table-bordered">
  <tr>  
      <td>Código Orden</td>
      <td>Rut Cliente</td>
      <td>Código Producto</td>
      <td>Nombre</td>
      <td>Datos Orden</td>
      <td>Archivo Asociado</td>
      <td>Estado Actual</td> 
      <td>Actualizar Estado Orden</td>
  </tr>


<?php 
     if(isset($_SESSION['consulta'])){
        if($_SESSION['consulta'] > 0){
            $codigoR=$_SESSION['consulta'];
            $sql = "SELECT ORDEN.ORD_ID, CLIENTE.CLI_RUT, PRODUCTO.PRO_ID, PRODUCTO.PRO_NOMBRE, ORDEN.ORD_DATOS, ORDEN.DOC_OR, ESTADO_ORDEN.EST_DESCRIPCION, ESTADO_ORDEN.EST_ID
            FROM ORDEN
            JOIN BOLETA ON BOLETA.BOL_NUMERO=ORDEN.BOL_NUMERO
            JOIN CLIENTE on CLIENTE.CLI_RUT=BOLETA.CLI_RUT
            JOIN USA ON USA.BOL_NUMERO=BOLETA.BOL_NUMERO
            JOIN PRODUCTO ON PRODUCTO.PRO_ID=USA.PRO_ID 
            JOIN ESTADO_ORDEN ON ESTADO_ORDEN.EST_ID=ORDEN.EST_ID
            WHERE CLIENTE.CLI_RUT=$codigoR";
        }else{
            $sql = "SELECT ORDEN.ORD_ID, CLIENTE.CLI_RUT, PRODUCTO.PRO_ID, PRODUCTO.PRO_NOMBRE, ORDEN.ORD_DATOS, ORDEN.DOC_OR, ESTADO_ORDEN.EST_DESCRIPCION, ESTADO_ORDEN.EST_ID
            FROM ORDEN
            JOIN BOLETA ON BOLETA.BOL_NUMERO=ORDEN.BOL_NUMERO
            JOIN CLIENTE on CLIENTE.CLI_RUT=BOLETA.CLI_RUT
            JOIN USA ON USA.BOL_NUMERO=BOLETA.BOL_NUMERO
            JOIN PRODUCTO ON PRODUCTO.PRO_ID=USA.PRO_ID 
            JOIN ESTADO_ORDEN ON ESTADO_ORDEN.EST_ID=ORDEN.EST_ID";
        }

    }else{
        $sql = "SELECT ORDEN.ORD_ID, CLIENTE.CLI_RUT, PRODUCTO.PRO_ID, PRODUCTO.PRO_NOMBRE, ORDEN.ORD_DATOS, ORDEN.DOC_OR, ESTADO_ORDEN.EST_DESCRIPCION, ESTADO_ORDEN.EST_ID
        FROM ORDEN
        JOIN BOLETA ON BOLETA.BOL_NUMERO=ORDEN.BOL_NUMERO
        JOIN CLIENTE on CLIENTE.CLI_RUT=BOLETA.CLI_RUT
        JOIN USA ON USA.BOL_NUMERO=BOLETA.BOL_NUMERO
        JOIN PRODUCTO ON PRODUCTO.PRO_ID=USA.PRO_ID 
        JOIN ESTADO_ORDEN ON ESTADO_ORDEN.EST_ID=ORDEN.EST_ID";
    }


   
    $result=mysqli_query($conexion,$sql);

    //INICIO DEL WHILE PARA MOSTRAR DATOS TABLA//
    while ($ver=mysqli_fetch_row($result)) {
    $datos=$ver[0]."||".$ver[3]."||".$ver[7];
    ?> 
  <tr>  
      <td><?php echo $ver[0]?></td>
      <td><?php echo $ver[1]?></td>
      <td><?php echo $ver[2]?></td>
      <td><?php echo $ver[3]?></td>
      <td><?php echo $ver[4]?></td>
      <td><?php echo $ver[5]?></td>
      <td><?php echo $ver[6]?></td>
      <td>
            <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos?>')" ></button>
      </td>  
  </tr>
  <?php   
        }//FIN WHILE//
  ?>
<tbody id="tasks"></tbody>
</table>