
<?php
include_once 'public/headerUsuario.php';
?>

  <div class="alert alert-success" role="alert">
                        BIENVENIDO, @ <?php  echo  $_SESSION['idUsuario']  ?>
		        </div>
<?php
include_once 'public/footer.php';
?>