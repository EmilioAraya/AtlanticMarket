
  
<?php
include_once 'public/headerCliente.php';
?>





<div class="container">
    <form action="?controlador=Item&accion=proceso_efectuar_compra_carrito"   method="post">
        <table id="mydatatable"  class="table table-bordered table-striped">

            <thead>
                <tr>


                    <th class="disable-sorting" >#Codigo</th>
                    <th>Item</th>
                    <th>ID del Cliente</th>
                    <th>Cantidad Articulo</th>
                    <th>Precio</th>
                    <th>Imagen </th>

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
                         <td> <img  src="data:image/jpg;base64,  <?php echo base64_encode($item['Imagen']); ?>"/>       </td>

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



