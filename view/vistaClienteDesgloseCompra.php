
  
<?php
include_once 'public/headerCliente.php';
?>





<div class="container">
    <form action="?controlador=Item&accion=proceso_efectuar_compra_carrito"   method="post">
        <table id="mydatatable"  class="table table-bordered table-striped">

            <thead>
                <tr>


                    <th class="disable-sorting">Codigo Producto</th>
                    <th>Identicación cliente</th>
                    <th >Fecha compra</th>
                    <th>Cantidad seleccionada</th>
                    <th >Desglose de precios</th>
                    <th>Nombre Comprador:</th>


                    
                </tr>
            </thead>   

            <?php
            foreach ($vars['listadoHistorial'] as $item) {
                ?>

                <tbody>  
                        <tr>
                            <td> <?php echo $item[0] ?> </td>
                            <td> <?php echo $item[1] ?> </td>
                            <td> <?php echo $item[2] ?> </td>
                            <td> <?php echo $item[3] ?> </td>
                            <td> <?php echo $item[4] ?> </td>
                            <td> <?php echo $item[5] ?> </td>
                            

                        </tr>

                </tbody>
                <?php
            }
            ?>

        </table>
        
    </form>


</div>


<?php
include_once 'public/footer.php';
?>


