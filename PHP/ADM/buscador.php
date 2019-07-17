<?php 

	require_once "../conexion.php";
    $conexion=conexion();
    
    $sql = "SELECT REGION.REG_ID, REGION.REG_NOMBRE, PAIS.PA_ID, PAIS.PA_NOMBRE
        FROM REGION
        JOIN PAIS ON REGION.PA_ID=PAIS.PA_ID";
    $result=mysqli_query($conexion,$sql);

?>
<br><br>
<div class="row">
    <div class="col-sm-8"></div>
    <div class="col-sm-4">
        
            <label>Buscador</label>
            <select id="buscadorvivo" class="form-control input-sm">
                <option value="0">Selecciona uno</option>
                <?php
                    while($ver=mysqli_fetch_row($result)):
                ?> 
                    <option value="<?php echo $ver[0] ?>">
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
                url:'../../PHP/ADM/crearsesion.php',
                success:function(r){
                    $('#tabla').load('../../PHP/ADM/tabla.php');
                    
                }
            });
        });
    });

</script>