

<?php

include_once 'public/headerAdmin.php';


?>
  <br /><br />
  <div class="container" style="width:600px;">
<form  action="?controlador=Item&accion=metodo_combo"  method="POST"  enctype="multipart/form-data" >  



    <div class="form-group" id="user-group">
        <input type="number" class="form-control" placeholder="Código de promoción" id="idCombo" name="idCombo" required=""/>
    </div>

    
    
    
    <div class="form-group" id="user-group">
        <input type="number" class="form-control" placeholder="Cantidad:" id="cantidad" name="cantidad" required=""/>
    </div>

    
     
    <div class="form-group" id="user-group">
        <input type="number" class="form-control" placeholder="Precio:" id="precio" name="precio" required=""/>
    </div>

    
  <div class="form-group" id="user-group">
        <input type="text" class="form-control" placeholder="Descripcion:" id="titulo" name="titulo" required=""/>
    </div>


       
  <div class="form-group" id="user-group">
        <input type="file" class="form-control" placeholder="Descripcion:" id="Imagen" name="Imagen" required=""/>
    </div>



    <input type="submit"  class="btn btn-primary" value="Aceptar"> 

</form>

</div>


<?php
include_once 'public/footer.php';
?>

