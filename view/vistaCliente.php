
<?php
include_once 'public/headerCliente.php';
?>




<div class="secciones">
    <article id="tab1">

        <form  action="?controlador=Item&accion=agregar_articulosCarrito_cliente"  method="post">

            <table id="tabla" >
                <tr  >
                    <th>Codigo</th>
                    <th>Item</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Cantidad Total</th>
                    <th>Elegir cantidad</th>
                    <th>Agregar al carrito</th>
               
                

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
                            <td> <div class="input-group-text">  <input  class="checks" name="idsArticulo[]" id="idsArticulo" value="<?php echo $idArticuloCompraCarrito = $item[0] ?>" type="checkbox" aria-label="Checkbox for following text input">                            Agregar </div> </td>

                     
                        </tr>
                    </tbody>
                    </tbody>


                    <?php
                }
                ?>
            </table>



            <button type="submit"   class="btn btn-primary" style="width: 160px;"   href="javascript:;" onclick="js_agregar_articulosCarrito_cliente($('#idsArticulo[]').val(), $('#cantidadAgregada[]').val());return false;"class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> 
                Agregar al carrito    </a>
            </button> 
            
             <a href="?controlador=Item&accion=vistaClienteDirecta">  Compra directa</a>
            </button> 
        </form>        
    
    </article>

<div> <input type="checkbox" id="selectall" value="Seleccionar todo">  Seleccionar todos </div>

</div>


<script> 

// add multiple select/unselect functionality
$("#selectall").on("click", function() {
  $(".idsArticulo").prop("checked", this.checked);
});

// if all checkbox are selected, check the selectall checkbox and viceversa
$(".idsArticulo").on("click", function() {
  if ($(".idsArticulo").length == $(".idsArticulo:checked").length) {
    $("#selectall").prop("checked", true);
  } else {
    $("#selectall").prop("checked", false);
  }
});</script>

<?php
include_once 'public/footer.php';
?>


