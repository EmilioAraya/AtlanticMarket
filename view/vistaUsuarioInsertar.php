
<?php
include_once 'public/headerUsuario.php';
?>

<div class="modal-dialog text-center">
    <div class="col-sm-12 main-section">
        <div class="modal-content">
            <div class="col-12 user-img">
                <img src="public/static/img/comida3.png" th:src="@{public/static/img/comida3.png}"/>
            </div>

            <form action="?controlador=Item&accion=insertarUsuario"  method="POST" method="POST" class="col-12" th:action="@{/login}" >


                <div class="form-group" id="codigo-group">
                    <input type="number" class="form-control" placeholder="Codigo de usuario"  required="" id="codigo" name="codigo"/>
                </div>



                <div class="form-group" id="nombre-group">
                    <input type="text" class="form-control" id="nombre" name="nombre" required="" placeholder="Nombre: ">
                </div>




                <div class="form-group" id="price-group">
                    <input type="text" class="form-control" id="precio" name="precio" required="" placeholder="Precio: ">
                </div>


                <div class="form-group" id="quantyly-group">
                    <input type="text" class="form-control" id="cantidad" name="cantidad" required="" placeholder="Cantidad: ">
                </div>



                <div class="form-group" id="category-group">
                    <div>

                        <select id="sel">
                            <option value="Hogar">Hogar</option>
                            <option value="Comestible">Comestible</option>
                            <option value="Herramienta">Herramienta</option>
                            <option value="Otro">Otro</option>
                        </select>

                        <button id="btn" type="button" class="btn btn-primary" onclick="show_selected()" value="click">Seleccionar</button>
                        <br>



                        <input class="form-control" type="text" id="categoria" name="categoria" placeholder="Categoria" required readonly="true"> 

                        <script>
    function show_selected() {
                                var selector = document.getElementById('sel');
                                var value = selector[selector.selectedIndex].value;

                                document.getElementById('categoria').value = value;
                            }

                            document.getElementById('btn').addEventListener('click', show_selected);
                        </script>



                    </div>

                    <!--                    
                                         <div class="form-group" id="codigo-group">
                                      Subir Imagen
                                      <input type="file" ame="Imagen"  id="Imagen" required=""/> 
                                    </div>-->

                </div>
                <div class="form-group" id="boton-group">

                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Añadir </button>
                </div>

            </form>
        


            <div   class="alert alert-success" role="alert">
                 <img src="public/static/img/atras.png" th:src="@{public/static/img/atras.png}"/>
                <a href="?controlador=Item&accion=vistaAdmin">Regresar</a>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'public/footer.php';
?>