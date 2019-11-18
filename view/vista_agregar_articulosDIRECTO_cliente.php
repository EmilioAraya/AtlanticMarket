
<?php
include_once 'public/header.php';
?>




    <article id="tab1">

        <form  action="?controlador=Item&accion=agregar_articulosDIRECTO_cliente"  method="post">

            <table id="tabla" >
                <tr  >
                    <th>Codigo</th>
                    <th>Item</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Cantidad Total</th>
                    <th>Elegir cantidad</th>
                    <th>Id cliente Directa</th>
                    <th> Tipo de compra: </th>
                </tr>   

                <?php
                foreach ($vars['listado'] as $item) {
                    ?>
                    <tbody>
                    <tbody>
                        <tr >
                            <td> <?php echo $item[0] ?> </td>
                            <td> <?php echo $item[1] ?> </td>
                            <td> <?php echo $item[2] ?> </td>
                            <td> <?php echo $item[3] ?> </td>
                            <td> <?php echo $item[4] ?> </td>

                            <td>  <div class="input-group-text"> <input    min="0" max="<?php echo $item[4] ?>" style="width: 50px;" name="cantidadAgregada[]" id="cantidadAgregada" value="<?php echo $cantidadP = $item[4] ?>" type="number" aria-label="Checkbox for following text input">   </div> </td>
              
                            <td>   <input type="text" name="idCliente" id="idCliente"  value="1"> <label for="idCliente"> </label></td>

                            <td><button type="button" onclick="js_agregar_articulosDIRECTO_cliente($('#idsArticulo[]').val(), $('#idCliente').val(), $('#cantidadAgregada[]').val());return false;"  id="nombreDirecta" style="width: 150px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Compra directa:
                                </button>     </td>
                        </tr>
                    </tbody>
                    </tbody>


                    <?php
                }
                ?>
            </table>



            <button type="submit" class="btn btn-primary"     href="javascript:;" onclick="js_agregar_articulosDirecto_cliente($('#idsArticulo[]').val(), $('#idCliente').val(), $('#cantidadAgregada[]').val());return false;"class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> 
               Comprar   </a>
            </button> 
        </form>        
        <br>
        <h3>Resultado de la compra: </h3>
        <span id="resultado">0</span>
    </article>

    <article id="tab2">
        <a href="?controlador=Item&accion=agregar_articulosCarrito_cliente"> Ver mi carrito </a>
    </article>
     <article id="tab2">
        <a href="?controlador=Item&accion=js_agregar_articulosCarrito_cliente">Eliminar mi carrito </a>
    </article>
    
    
    <!-- Modal -->




<?php
include_once 'public/footer.php';
?>


