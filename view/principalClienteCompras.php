<?php
include_once 'public/headerCliente.php';
?>



<li class="nav-item">
    <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=eliminar_articulo_del_carrito">Eliminar articulo</a> 
</li>

<li class="nav-item">
    <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=mostrar_ArticulosAgregadosCarrito">Comprar </a> 
</li>


<li class="nav-item">
    <a  class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=mostrar_ArticulosAgregadosCompraDirecta">Comprar directamente</a> 
</li>



<?php
include_once 'public/footer.php';
?>
