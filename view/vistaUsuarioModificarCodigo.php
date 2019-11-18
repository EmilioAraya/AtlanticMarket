<?php
include_once 'public/headerUsuario.php';
?>


<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-img">
                <img src="public/img/modificar.png" th:src="@{public/img/modificar.png}"/>
            </div>

            <form action="?controlador=Item&accion=actualizarVista2" method="post">
                <div>
                
                    <input type="number" name="codigo" value=""  required="">
                </div>
                
                
                 <div>
                <input  type="submit" value="Buscar">
                </div>
            </form>
            <div>

                <div>
                    <div   class="alert alert-success" role="alert">
                        <img src="public/static/img/atras.png" th:src="@{public/static/img/atras.png}"/>
                        <a href="?controlador=Item&accion=vistaAdmin">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    <?php
    include_once 'public/footer.php';
    ?>

    