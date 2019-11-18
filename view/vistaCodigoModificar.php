<?php
include_once 'public/headerAdmin.php';
?>


<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <form action="?controlador=Item&accion=actualizarVista" method="post">


                <br>
                <div class="form-group" id="user-group">
                    Codigo:<br>
                    <input type="number" name="codigo" value="" class="form-control" required="">
                   
                </div>
                 <input  class="btn btn-primary" type="submit" value="Buscar"  >
       
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
                <?php
                include_once 'public/footer.php';
                ?>