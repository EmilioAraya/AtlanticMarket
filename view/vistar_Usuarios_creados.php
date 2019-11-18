

<?php
include_once 'public/headerAdmin.php';
?>


<div class="container">
    <form action="?controlador=Item&accion=proceso_eliminar_usuarios"   method="post">
        <table id="mydatatable"  class="table table-bordered table-striped">

            <thead>
                <tr>


                    <th class="disable-sorting" >#Codigo  Usuario</th>
                    <th>Nombre Usuario</th>
                    <th>Usuario Asignado</th>
                    <th>Eliminar Usuario </th>


                </tr>
            </thead>   

            <?php
            foreach ($vars['listado'] as $item) {
                ?>

                <tbody>  
                    <tr>
                        <td> <?php echo $item[0] ?> </td>
                        <td> <?php echo $item[1] ?> </td>
                        <td> <?php echo $item[2] ?> </td>

                        <td> <div class="input-group-text">  <input  class="idUsuario" name="idUsuario" id="idUsuario" value="<?php echo $item[0] ?>" type="checkbox" aria-label="Checkbox for following text input">  Agregar </div> </td>


                    </tr>

                </tbody>
                <?php
            }
            ?>

        </table>
 <button> <a href="?controlador=Item&accion=proceso_eliminar_usuarios">  </a>  Eliminar Rol </button>

    </form>


    <div> <input type="checkbox" id="selectall" value="Seleccionar todo">  Seleccionar todos </div>
</div>


<script>

// add multiple select/unselect functionality
    $("#selectall").on("click", function () {
        $(".idUsuario").prop("checked", this.checked);
    });

// if all checkbox are selected, check the selectall checkbox and viceversa
    $(".idUsuario").on("click", function () {
        if ($(".idsArticulo").length == $(".idUsuario:checked").length) {
            $("#selectall").prop("checked", true);
        } else {
            $("#selectall").prop("checked", false);
        }
    });</script>
<?php
include_once 'public/footer.php';
?>

