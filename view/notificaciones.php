
<?php
include_once 'public/headerAdmin.php';
?>




<div class="container">
    <form action="?controlador=Item&accion=proceso_efectuar_compra_carrito"   method="post">
        <table id="mydatatable"  class="table table-bordered table-striped">

            <thead>
                <tr>


                    <th class="disable-sorting">Código Producto</th>
                    <th> Productos con cantidad más baja</th>



                </tr>
            </thead>   

            <?php
            foreach ($vars['listadoProductoMasBajo'] as $item) {
                ?>

                <tbody>  
                    <tr>
                        <td> <?php echo $item[0] ?> </td>
                        <td> <?php echo $item[1] ?> </td>



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