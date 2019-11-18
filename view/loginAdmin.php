<?php
include_once 'public/headerPrincipal.php';
?>


<div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="public/static/img/user.png" th:src="@{public/static/img/user.png}"/>
                </div>
                
                <form action="?controlador=Item&accion=inicioSesionAdmin" method="POST" class="col-12" th:action="@{/login}" method="get">
                   
                    
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" id="username" name="username" required=""/>
                    </div>
                    
                    <div class="form-group" id="contrasena-group">
                          <input type="password" class="form-control" id="password" required="" name="password" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar contrasena?</a>
                </div>
                
                
		        <div th:if="${param.logout}" class="alert alert-success" role="alert">
		            Registarme
		        </div>
            </div>
        </div>
    </div>


<?php
include_once 'public/footer.php';
?>
