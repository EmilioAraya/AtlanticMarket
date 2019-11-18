
  
<?php
include_once 'public/headerCliente.php';
?>





<div class="container">
    <form action="?controlador=Item&accion=proceso_efectuar_compra_carrito"   method="post">
        <table id="mydatatable"  class="table table-bordered table-striped">

            <thead>
                <tr>


                    <th class="disable-sorting">Precio TOTAL compra</th>
                    <th>Cantidad total articulos</th>
             
                    <th>Cantidad Categorias</th>
                    <th> Id Comprador</th>
                    


                    
                </tr>
            </thead>   

            <?php
            foreach ($vars['listadoTotalCompra'] as $item) {
                ?>

                <tbody>  
                        <tr>
                            <td> <?php echo $item[0] ?> </td>
                            <td> <?php echo $item[1] ?> </td>
                            <td> <?php echo $item[2] ?> </td>
                            <td> <?php echo $item[3] ?> </td>
                           
                            
                            

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


