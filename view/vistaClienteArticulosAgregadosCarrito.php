
  
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
                    <th>Comprar ahora</th>
                     <th>cantidad</th>

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




                        <td> <div class="input-group-text">  <input  class="idsArticulo" name="idsArticulo[]" id="idsArticulo" value="<?php echo $item[0] ?>" type="checkbox" aria-label="Checkbox for following text input">                            Agregar </div> </td>

                        <td> <input type="number" required="" id="cantidad" name="cantidad[]" min="0" max="<?php echo $item[3] ?>"  value="<?php echo $item[3] ?>" > </td>

                    </tr>

                </tbody>
                <?php
            }
            ?>

        </table>
          
        <input  class="btn btn-primary" type="submit" name="btnC" id="bntC" href="javascript:;" onclick="jx_seleccionarProducto($('#idsArticulo[]').val(), $('#cantidad[]').val());return false;"   data-toggle="modal" data-target="#exampleModalCenter"  value="calcular"/>

    </form>


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

