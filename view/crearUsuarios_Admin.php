  
<?php
include_once 'public/headerAdmin.php';
?>




<div class="modal-dialog text-center">
    <div class="col-sm-12 main-section">
        <div class="modal-content">
            <div class="col-12 user-img">
                <img src="public/img/logoUsuario.png" th:src="@{public/img/logoUsuario.png}"/>
            </div>

            <form action="?controlador=Item&accion=newUsuario"  method="POST"  class="col-12" th:action="@{/login}">


                <div class="form-group" id="codigo-group">
                    <input type="text" class="form-control" placeholder="Nombre de usuario"  required="" id="nombreUsuario" name="nombreUsuario"/>
                </div>



                <div class="form-group" id="nombre-group">
                    <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre: ">
                </div>




                <div class="form-group" id="password-group">
                    <input type="password" class="form-control" id="contra" name="contra" required  placeholder="Contraseña: ">
                </div>


                <div class="form-group" id="email-group">
                    <input type="email" class="form-control" id="correo" name="correo" required="" placeholder="Correo: ">
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