
<?php
include_once 'public/headerCliente.php';
?>





<div class="container">
    <form action="?controlador=Item&accion=comprar_promo"   method="post">
        <table id="mydatatable"  class="table table-bordered table-striped">

            <thead>
                <tr>


                    <th class="disable-sorting" >Código Promoción</th>
                    <th> Imagen</th>
                    <th>Precio promo</th>
                    <th>Descripcion Promo</th>
                     <th>Agregar cantidad </th>
                    <th>Agregar promoción</th>
                    
                </tr>
            </thead>   

            <?php
            foreach ($vars['listaPromociones'] as $item) {
                ?>

                <tbody>  
                    <tr>
                        <td> <?php echo $item[0] ?> </td>
                        <td> <img  src="data:image/jpg;base64,  <?php echo base64_encode($item['imagen']); ?>"/>       </td>
                        <td> <?php echo $item[2] ?> </td>
                        <td> <?php echo $item[3] ?> </td>
                        <td> <?php echo $item[4] ?> </td>
                        
                         <td> <button href="javascript:;" onclick="js_enviar_compraCombo($('#idPromo').val(), $('#cantidad').val());return false;"  name="idPromo"  id="idPromo" value="<?php echo $item[0] ?>"type="submit">  Comprar combo </button></td>
                            
     
                    </tr>

                </tbody>
                <?php
            }
            ?>

        </table>
        <input type="number" id="cantidad" name="cantidad"/>
    </form>


</div>


<?php
include_once 'public/footer.php';
?>



