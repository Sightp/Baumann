<?php 

	require_once "../conexion.php";
    $conexion=conexion();
    
    $sql = "SELECT ORDEN.ORD_ID, CLIENTE.CLI_RUT, PRODUCTO.PRO_ID, PRODUCTO.PRO_NOMBRE, ORDEN.ORD_DATOS, ORDEN.DOC_OR, ESTADO_ORDEN.EST_DESCRIPCION, ESTADO_ORDEN.EST_ID
    FROM ORDEN
    JOIN BOLETA ON BOLETA.BOL_NUMERO=ORDEN.BOL_NUMERO
    JOIN CLIENTE on CLIENTE.CLI_RUT=BOLETA.CLI_RUT
    JOIN USA ON USA.BOL_NUMERO=BOLETA.BOL_NUMERO
    JOIN PRODUCTO ON PRODUCTO.PRO_ID=USA.PRO_ID 
    JOIN ESTADO_ORDEN ON ESTADO_ORDEN.EST_ID=ORDEN.EST_ID";

    $result=mysqli_query($conexion,$sql);

?>
<br><br>
<div class="row">
    <div class="col-sm-8"></div>
    <div class="col-sm-4">
        
            <label>Buscador por cliente</label>
            <select id="buscadorvivo" class="form-control input-sm">
                <option value="0">Selecciona uno</option>
                <?php
                    while($ver=mysqli_fetch_row($result)):
                ?> 
                    <option value="<?php echo $ver[1] ?>">
                        <?php echo $ver[1]?>
                    </option>

                <?php
                    endwhile;
                ?> 
            </select>
    </div>
</div>  

<!--SCRIP PARA CARGAR LA TABLA-->
<script type="text/javascript">
    $(document).ready(function (){
        $('#buscadorvivo').select2();

        $('#buscadorvivo').change(function(){
            $.ajax({
                type:"POST",
                data: 'valor=' + $('#buscadorvivo').val(),
                url:'../../PHP/Laboratorio/crearsesion.php',
                success:function(r){
                    $('#tabla').load('../../PHP/Laboratorio/tabla.php');
                    
                }
            });
        });
    });

</script>