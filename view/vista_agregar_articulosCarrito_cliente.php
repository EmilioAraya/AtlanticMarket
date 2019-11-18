
<?php
include_once 'public/header.php';
?>



    <article id="tab1">

        <form  action="?controlador=Item&accion=comprar_articulos_cliente" method="post">

            <table id="tabla" >
                <tr  >
                    <th>Codigo</th>
                    <th>Item</th>
                    <th>Id cliente</th>
                    <th>Cantidad</th>
                    <th>Precio Total</th>
                    <th>Eliminar del carrito</th>
                    <th>Comprar Articulos </th>


                </tr>   

                <?php
                foreach ($vars['listarProductosDelCarrito'] as $item) {
                    ?>
                    <tbody >
                    <tbody >
                        <tr >
                            <td > <?php echo $codigo[]= $item[0] ?> </td>
                            <td> <?php echo $item[1] ?> </td>
                            <td> <?php echo $item[2] ?> </td>
                            <td> <?php echo $cantidadArticulos[]= $item[3] ?> </td>
                            <td> <?php echo $item[4] ?> </td>



                            <td> <div class="input-group-text">  <input  class="checks" name="arrayAgregar[]" id="arrayAgregar" value="<?php echo $totalPorCantidad , $cantidadArticulos?>" type="checkbox" aria-label="Checkbox for following text input">   Comprarlo </div> </td>


                        </tr>
                    </tbody>
                    </tbody>


                    <?php
                }
                ?>
            </table>



            <button type="submit"   style="width: 160px;"  href="javascript:;" onclick="js_agregar_articulosCarrito_cliente($('#arrayAgregar[]').val());
                    return false;"class="btn btn-primary"> <i class="fas fa-sign-in-alt"></i>   Efectuar  compra </a>


            </button>


            <a class="btn btn-primary" href="?controlador=Item&accion=eliminar_articulosCarrito_cliente">  Eliminar agregados </a>




            

    </article>



<?php
include_once 'public/footer.php';
?>


