<?php
include_once 'public/headerPrincipal.php';
?>





<div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="public/img/cliente.png" th:src="@{public/img/cliente.png}"/>
                </div>
                
                <form action="?controlador=Item&accion=inicioSesionCliente"  method="POST" class="col-12" th:action="@{/login}">
                   
                    
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control"required="" placeholder="Identificacion" id="idCliente" name="idCliente"/>
                    </div>
                    
                    <div class="form-group" id="contrasena-group">
                          <input type="password" class="form-control" required="" id="password" name="password" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar contrasena?</a>
                </div>
                
                
		        <div class="alert alert-success" role="alert">
                            <a href="?controlador=Item&accion=registrarClientes">   Regitrarme </a>
		        </div>
            </div>
        </div>
    </div>


<?php
include_once 'public/footer.php';
?>