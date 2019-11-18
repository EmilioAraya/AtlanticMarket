<?php
include_once 'public/headerPrincipal.php';
?>




    <div class="modal-dialog text-center">
    
            <div class="modal-content">
                <div class="col-10 user-img">
                    <img src="public/img/user.png" th:src="public/img/user.png"/>
                </div>
                <form  action="?controlador=Item&accion=validarClientes" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Usuario"  id="username"  name="username" required=""/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" id="password" name="password" required=""/>
                    </div>
                    
                    <div class="form-group" id="nombre-group">
                        <input type="text" class="form-control" placeholder="Nombre:" id="nombre" name="nombre" required=""/>
                    </div>
                    
                      <div class="form-group" id="genero-group">
                          <input type="text" class="form-control" placeholder="Correo:" id="correo" name="correo" required=""/>
                    </div>
                    
                
                     
                      <div class="form-group" id="genero-group">
                          <input type="number" class="form-control" placeholder="Identificacion:" id="id" name="id" required=""/>
                    </div>
                    
                    
                    <div>
                    <button type="submit"  id="registrarCliente" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Registrarse </button>
                    </div>
                    
                    <div>
                    <button type="button" class="btn btn-primary"  ><i class="fas fa-sign-in-alt"></i> Regresar  </button>
                    </div>
                </form>
            
               
               
          
        </div>
    </div>

   
<?php
include_once 'public/footer.php';
?>

