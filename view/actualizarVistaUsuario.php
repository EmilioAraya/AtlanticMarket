<?php
include_once 'public/headerUsuario.php';
?>



<div class="modal-dialog text-center">
    <div class="col-sm-12 main-section">
        <div class="modal-content">

            <form action="?controlador=Item&accion=actualizarDatos2" class="col-12" method="post">

                <?php foreach ($vars['listadoBuscar'] as $item) { ?>

                    <div>
                        Nombre:
                        <input type="number" name="codigo"  readonly="true" value="<?php echo $item[0]; ?>">
                    </div>
                    Nombre<br>
                    <input type="text" name="nombre"  required="" value="<?php echo $item[1]; ?>">
                    <br>
                    Precio<br>
                    <input type="number" name="precio" required  value="<?php echo $item[3]; ?>">
                    <br>
                    Categoria<br>
                    <select id="sel">
                        <option value="Hogar">Hogar</option>
                        <option value="Comestible">Comestible</option>
                        <option value="Herramienta">Herramienta</option>
                        <option value="Otro">Otro</option>
                    </select>
                    <button id="btn" type="button" class="btn btn-primary" onclick="show_selected()" value="click">Seleccionar</button>
                    <br>
                    <h3>Categoria:</h3>
                    <input class="form-control" type="text" id="categoria" required name="categoria" placeholder="Categoria" required readonly="true" value="<?php echo $item[2]; ?>"> 
                    <script>
                        function show_selected() {
                            var selector = document.getElementById('sel');
                            var value = selector[selector.selectedIndex].value;

                            document.getElementById('categoria').value = value;
                        }

                        document.getElementById('btn').addEventListener('click', show_selected);
                    </script>
                    <br>
                    Cantidad:<br>
                    <input type="number" required name="cantidad"  value="<?php echo $item[4]; ?>">
                    <br>
                <?php } ?>

                <input class="btn btn-primary" type="submit" value="Actualizar">
            </form>

        </div></div></div>

<?php
include_once 'public/footer.php';
?>