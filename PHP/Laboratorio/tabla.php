<?php
    session_start();
    require_once "../conexion.php";
    $conexion=conexion();

?>


<table class="table table-hover table-condensed table-bordered" id="tablaDinamicaLoad" >
    


    <thead class="thead-dark" >
        <tr>
            <th scope="col">Código Orden</td>
            <th scope="col">Rut Cliente</<th>
            <th scope="col">Código Producto</<th>
            <th scope="col">Nombre</<th>
            <th scope="col">Datos Orden</<th>
            <th scope="col">Archivo Asociado</<th>
            <th scope="col">Estado Actual</<th> 
            <th scope="col">Actualizar Estado Orden</th>
        </tr>
  </thead>
    <tbody>

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
                WHERE CLIENTE.CLI_RUT=$codigoR AND (ESTADO_ORDEN.EST_ID='2' OR ESTADO_ORDEN.EST_ID='3'
                OR ESTADO_ORDEN.EST_ID='4' OR ESTADO_ORDEN.EST_ID='5')";
            }else{
                $sql = "SELECT ORDEN.ORD_ID, CLIENTE.CLI_RUT, PRODUCTO.PRO_ID, PRODUCTO.PRO_NOMBRE, ORDEN.ORD_DATOS, ORDEN.DOC_OR, ESTADO_ORDEN.EST_DESCRIPCION, ESTADO_ORDEN.EST_ID
                FROM ORDEN
                JOIN BOLETA ON BOLETA.BOL_NUMERO=ORDEN.BOL_NUMERO
                JOIN CLIENTE on CLIENTE.CLI_RUT=BOLETA.CLI_RUT
                JOIN USA ON USA.BOL_NUMERO=BOLETA.BOL_NUMERO
                JOIN PRODUCTO ON PRODUCTO.PRO_ID=USA.PRO_ID 
                JOIN ESTADO_ORDEN ON ESTADO_ORDEN.EST_ID=ORDEN.EST_ID AND (ESTADO_ORDEN.EST_ID='2' OR ESTADO_ORDEN.EST_ID='3'
                OR ESTADO_ORDEN.EST_ID='4' OR ESTADO_ORDEN.EST_ID='5')";
            }
        }else{
            $sql = "SELECT ORDEN.ORD_ID, CLIENTE.CLI_RUT, PRODUCTO.PRO_ID, PRODUCTO.PRO_NOMBRE, ORDEN.ORD_DATOS, ORDEN.DOC_OR, ESTADO_ORDEN.EST_DESCRIPCION, ESTADO_ORDEN.EST_ID, BOLETA.BOL_NUMERO
            FROM ORDEN
            JOIN BOLETA ON BOLETA.BOL_NUMERO=ORDEN.BOL_NUMERO
            JOIN CLIENTE on CLIENTE.CLI_RUT=BOLETA.CLI_RUT
            JOIN USA ON USA.BOL_NUMERO=BOLETA.BOL_NUMERO
            JOIN PRODUCTO ON PRODUCTO.PRO_ID=USA.PRO_ID 
            JOIN ESTADO_ORDEN ON ESTADO_ORDEN.EST_ID=ORDEN.EST_ID AND (ESTADO_ORDEN.EST_ID='2' OR ESTADO_ORDEN.EST_ID='3'
            OR ESTADO_ORDEN.EST_ID='4' OR ESTADO_ORDEN.EST_ID='5')";
        }
       
        $result=mysqli_query($conexion,$sql);
        //INICIO DEL WHILE PARA MOSTRAR DATOS TABLA//
        while ($ver=mysqli_fetch_row($result)) {
        $datos=$ver[0]."||".$ver[3]."||".$ver[7];
       
        ?> 

    <tr class="tabla-contenido">  
            <td><?php echo $ver[0]?></td>
            <td><?php echo $ver[1]?></td>
            <td><?php echo $ver[2]?></td>
            <td><?php echo $ver[3]?></td>
            <td><?php echo $ver[4]?></td> 
          
            <td>
            <?php
            echo '<form method="post" action="../../PHP/Laboratorio/descargar.php?&rut='.$ver[1].'&boleta='.$ver[8].'&prducto='.$ver[2].'&orden='.$ver[0].'" enctype="multipart/form-data">';
            echo '<input type="submit" value="DESCARGAR" class="btn btn-primary"/>';
            
            ?>
            </td>
            <td><?php echo $ver[6]?></td>
            <td>
            <button class="btn btn-warning " data-toggle="modal" data-target="#modalEdicion" style="margin-right:5px;"onclick="agregaform('<?php echo $datos  ?>')"><i class="fas fa-pen"style="color:#fff;"></i></button>
            </td>  
        </tr>
    <?php   
        }//FIN WHILE//
    ?>
    </tbody>
</table>



<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaDinamicaLoad').DataTable({
            language:{
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst":    "Primero",
                            "sLast":     "Último",
                            "sNext":     "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    }
        });
    });
</script>