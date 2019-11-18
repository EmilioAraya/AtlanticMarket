<?php
include_once 'public/headerAdmin.php';
?>



<div class="modal-dialog text-center">
    <div class="col-sm-12 main-section">
        <div class="modal-content">

             <div class="col-12 user-img">
                    <img src="public/img/actualizar.png" th:src="@{public/img/actualizar.png}"/>
                </div>
                
            <form action="?controlador=Item&accion=actualizarDatos" class="col-12" method="post">
                <!--SCRIPTLET-->
                <?php foreach ($vars['listadoBuscar'] as $item) { ?>


                    Codigo:
                    <input type="number" name="codigo"  readonly="true" value="<?php echo $item[0]; ?>">

                    <br>  
                    <br>
                    Nombre:
                    <input type="text" name="nombre" required="" value="<?php echo $item[1]; ?>">
                    <br>
                     <br>
                    Precio:
                    <input type="number" name="precio" required="" value="<?php echo $item[3]; ?>">
                    <br>
                     <br>
                    Categoria
                    <select id="sel">
                        <option value="Hogar">Hogar</option>
                        <option value="Comestible">Comestible</option>
                        <option value="Herramienta">Herramienta</option>
                        <option value="Otro">Otro</option>
                    </select>
                    <button id="btn" type="button" class="btn btn-primary" onclick="show_selected()" value="click">Seleccionar</button>
                    <br>
                    <h3>Categoria:</h3>
                    <input class="form-control" type="text" id="categoria" name="categoria" placeholder="Categoria" required readonly="true" value="<?php echo $item[2]; ?>"> 
                    <script>
                        function show_selected() {
                            var selector = document.getElementById('sel');
                            var value = selector[selector.selectedIndex].value;

                            document.getElementById('categoria').value = value;
                        }

                        document.getElementById('btn').addEventListener('click', show_selected);
                    </script>
                    <br>
                     <br>
                    Cantidad:
                    <input type="number" name="cantidad"  required="" value="<?php echo $item[4]; ?>">
                    <br>
                <?php } ?>

                <input type="submit" class="btn btn-primary"  value="Actualizar">
            </form>

        </div></div></div>

<?php
include_once 'public/footer.php';
?>