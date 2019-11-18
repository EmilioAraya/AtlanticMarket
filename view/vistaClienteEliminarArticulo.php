

<?php
include_once 'public/headerCliente.php';
?>


<div class="container">
    <form action="?controlador=Item&accion=proceso_eliminar_compra"   method="post">
        <table id="mydatatable"  class="table table-bordered table-striped">

            <thead>
                <tr>


                    <th class="disable-sorting" >#Codigo</th>
                    <th>Item</th>
                    <th>ID del Cliente</th>
                    <th>Cantidad Articulo</th>
                    <th>Precio</th>



                    <th>Eliminar ahora</th>
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


                        <td> <div class="input-group-text">  <input  class="idsElimina" name="idsElimina[]" id="idsElimina" value="<?php echo $item[0] ?>" type="checkbox" aria-label="Checkbox for following text input">   Eliminar </div> </td>



                    </tr>

                </tbody>
                <?php
            }
            ?>

        </table>

        <input type="submit" class="btn btn-primary" name="btnC" id="bntC" href="javascript:;" onclick="jx_seleccionarProducto($('#idsArticulo[]').val());return false;"   data-toggle="modal" data-target="#exampleModalCenter"  value="Eliminar"/>

    </form>

    <div> <input type="checkbox" id="selectall" value="Seleccionar todo">  Seleccionar todos </div>
</div>



<script>

// add multiple select/unselect functionality
    $("#selectall").on("click", function () {
        $(".idsElimina").prop("checked", this.checked);
    });

// if all checkbox are selected, check the selectall checkbox and viceversa
    $(".idsElimina").on("click", function () {
        if ($(".idsElimina").length == $(".idsElimina:checked").length) {
            $("#selectall").prop("checked", true);
        } else {
            $("#selectall").prop("checked", false);
        }
    });</script>

<?php
include_once 'public/footer.php';
?>

