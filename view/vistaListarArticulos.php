
<?php
include_once 'public/headerAdmin.php';
?>


<div class="container">
    <form action="?controlador=Item&accion=proceso_enviar_datos_carrito"   method="post">
        <table id="mydatatable"  class="table table-bordered table-striped">

            <thead>
                <tr>


                    <th class="disable-sorting" >#Codigo</th>
                    <th>Item</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Cantidad Total</th>
                    
                    
                 
                </tr>
            </thead>   

            <?php
            foreach ($vars['listado'] as $item) {
                ?>

                <tbody>  
                    <tr>
                        <td> <?php echo $item[0] ?> </td>
                        <td> <?php echo $item[1] ?> </td>
                        <td> <?php echo $item[2] ?> </td>
                        <td> <?php echo $item[3] ?> </td>
                        <td> <?php echo $item[4] ?> </td>


                          
                        </tr>

                    </tbody>
                    <?php
                }
                ?>

        </table>

    </form>
     <div   class="alert alert-success" role="alert">
                 <img src="public/static/img/atras.png" th:src="@{public/static/img/atras.png}"/>
                <a href="?controlador=Item&accion=vistaAdmin">Regresar</a>
            </div>

</div>

<?php
include_once 'public/footer.php';
?>