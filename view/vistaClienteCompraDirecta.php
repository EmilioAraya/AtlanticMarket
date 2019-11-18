
  
<?php
include_once 'public/headerCliente.php';
?>


<div class="container">
    <form action="?controlador=Item&accion=proceso_compra_directa"   method="post">
        <table id="mydatatable"  class="table table-bordered table-striped">

            <thead>
                <tr>


                    <th class="disable-sorting" >#Codigo</th>
                    <th>Item</th>
                    <th>ID del Cliente</th>
                    <th>Cantidad Articulo</th>
                    <th>Precio</th>
                 
                    <th>Comprar ahora</th>

                </tr>
            </thead>   

            <?php
            foreach ($vars['listadoCarrito'] as $item) {
                ?>

                <tbody>  
                    <tr>
                        <td> <?php echo $item[0] ?> </td>
                        <td> <?php echo $item[1] ?> </td>
                        <td> <?php echo $item[2] ?> </td>
                        <td> <?php echo $item[3] ?> </td>
                        <td> <?php echo $item[4] ?> </td>



                            <td> <button href="javascript:;" onclick="js_enviar_compraDirecta($('#idsArticulo').val(), $('#cantidadProductos').val());return false;"  name="idsArticulo"  id="idsArticulo" value="<?php echo $item[0] ?>"type="submit">  Comprar ahora </button></td>
                            
                
                    </tr>

                    </tbody>
                    <?php
                }
                ?>

        </table>
        <input  type="number" class="btn btn-primary"  required=""  id="cantidadProductos" name="cantidadProductos"  min="0"    value="<?php echo $item[3] ?>"> 
   
                    
         
                    
                  


    </form>


</div>



<?php
include_once 'public/footer.php';
?>

