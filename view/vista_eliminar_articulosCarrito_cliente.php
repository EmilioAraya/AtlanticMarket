<?php
include_once 'public/header.php';
?>

<body>


    <div class="secciones">
        <article id="tab1">

            <form  action="?controlador=Item&accion=eliminar_articulosCarrito_cliente" method="post">

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
                                <td > <?php echo $item[0] ?> </td>
                                <td> <?php echo $item[1] ?> </td>
                                <td> <?php echo $item[2] ?> </td>
                                <td> <?php echo $item[3] ?> </td>
                                <td> <?php echo $totalPorCantidad = $item[4] * $item[3] ?> </td>


                                <td> <div class="input-group-text">  <input  class="checks" name="arrayEliminar[]" id="arrayEliminar" value="<?php echo $item[0] ?>" type="checkbox" aria-label="Checkbox for following text input">  Articulo Eliminar </div> </td>


                            </tr>
                        </tbody>
                        </tbody>


                        <?php
                    }
                    ?>
                </table>




                <button type="submit"  class="btn btn-primary"  style="width: 160px;"  href="javascript:;" onclick="js_eliminar_articulosCarrito_cliente($('#arrayEliminar[]').val());return false;"class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> 
                    Eliminar seleccionados 
                </button> 


            </form>        




<div> <input type="checkbox" id="selectall" value="Seleccionar todo">  Seleccionar todos </div>
    </div>

    <script> 

// add multiple select/unselect functionality
$("#selectall").on("click", function() {
  $(".idsElimina").prop("checked", this.checked);
});

// if all checkbox are selected, check the selectall checkbox and viceversa
$(".idsElimina").on("click", function() {
  if ($(".idsElimina").length == $(".idsElimina:checked").length) {
    $("#selectall").prop("checked", true);
  } else {
    $("#selectall").prop("checked", false);
  }
});</script>
    
    <?php
    include_once 'public/footer.php';
    ?>


