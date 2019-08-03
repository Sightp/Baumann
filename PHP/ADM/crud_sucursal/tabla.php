<?php
    session_start();
    require_once "../../conexion.php";
    $conexion=conexion();

?>


<table class="table table-hover table-condensed table-bordered" id="tablaDinamicaLoad" >
    

<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo" style="margin-bottom:5px;">
    <i class="fas fa-plus" style="margin-right:5px;" ></i>Agregar
</button>

    <thead class="thead-dark" >
        <tr >
            <th scope="col">ID</th>
            <th scope="col">Nombre Sucursal </th>
            <th scope="col">Ciudad</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Correo</th>
            <th scope="col">Dirección</th>
            <th scope="col">Acción</th>
        </tr>
  </thead>
    <tbody>

    <?php
        

        if(isset($_SESSION['consulta'])){
            if($_SESSION['consulta'] > 0){
                $codigoR=$_SESSION['consulta'];
                $sql = "SELECT SUCURSAL.SUC_ID, SUCURSAL.SUC_NOMBRE, CIUDAD.CIU_NOMBRE, SUCURSAL.SUC_TELEFONO,
                        SUCURSAL.SUC_CORREO, SUCURSAL.SUC_DIRECCION
                FROM SUCURSAL
                JOIN CIUDAD ON SUCURSAL.CIU_ID=CIUDAD.CIU_ID
                WHERE SUCURSAL.SUC_ID=$codigoR";
            }else{
                $sql = "SELECT SUCURSAL.SUC_ID, SUCURSAL.SUC_NOMBRE, CIUDAD.CIU_NOMBRE, SUCURSAL.SUC_TELEFONO,
                SUCURSAL.SUC_CORREO, SUCURSAL.SUC_DIRECCION
                FROM SUCURSAL
                JOIN CIUDAD ON SUCURSAL.CIU_ID=CIUDAD.CIU_ID";
            }

        }else{
            $sql = "SELECT SUCURSAL.SUC_ID, SUCURSAL.SUC_NOMBRE, CIUDAD.CIU_NOMBRE, SUCURSAL.SUC_TELEFONO,
            SUCURSAL.SUC_CORREO, SUCURSAL.SUC_DIRECCION
            FROM SUCURSAL
            JOIN CIUDAD ON SUCURSAL.CIU_ID=CIUDAD.CIU_ID";
        }


        $result=mysqli_query($conexion,$sql);

        //INICIO DEL WHILE PARA MOSTRAR DATOS TABLA//
        while ($ver=mysqli_fetch_row($result)) {  
            
            $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5];
    ?>

    <tr class="tabla-contenido">  
        <td> <?php echo $ver[0]?></td>
        <td> <?php echo $ver[1]?></td>  
        <td> <?php echo $ver[2]?></td>  
        <td> <?php echo $ver[3]?></td>  
        <td> <?php echo $ver[4]?></td>  
        <td> <?php echo $ver[5]?></td>  
  
        
          
        <td>
            <button class="btn btn-warning " data-toggle="modal" data-target="#modalEdicion" style="margin-right:5px;"onclick="agregaform('<?php echo $datos  ?>')"><i class="fas fa-pen"style="color:#fff;"></i></button>
            <button class="btn btn-danger " onclick="preguntarSiNo('<?php echo $ver[0]?>')"><i class="fas fa-times"></i></button>
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