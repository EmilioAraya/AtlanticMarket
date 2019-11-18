<?php
include_once 'public/headerCliente.php';
?>





<div class="container">
    <form action="?controlador=Item&accion=comprar_promo"   method="post"  enctype="multipart/form-data">
        <table id="mydatatable"  class="table table-bordered table-striped">

            <thead>
                <tr>


                    <th class="disable-sorting" >Precio Total:</th>
                    <th> Cantidad total:</th>
                    <th>Id Promo:</th>
                     <th>ID cliente</th>
                    
                   
                   
                    
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
                        
                       
                    </tr>

                </tbody>
                <?php
            }
            ?>

        </table>
     
    </form>


</div>


<?php
include_once 'public/footer.php';
?>


