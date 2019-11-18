<?php
include_once 'public/headerAdmin.php';
?>





<div class="container">
    <form action="?controlador=Item&accion=comprar_promo"   method="post"  enctype="multipart/form-data">
        <table id="mydatatable"  class="table table-bordered table-striped">

            <thead>
                <tr>


                    <th class="disable-sorting" >Cantidad combos agregada</th>
                    <th> Imagen</th>
                    <th>Precio total</th>
                     <th>ID cliente</th>
                    <th>ID promo</th>
                     <th>Fecha compra</th>
                   
                    
                </tr>
            </thead>   

            <?php
            foreach ($vars['listaCombos'] as $item) {
                ?>

                <tbody>  
                    <tr>
                        <td> <?php echo $item[0] ?> </td>
                        <td> <img  src="data:image/jpg;base64,  <?php  echo base64_encode($item['Imagen']);?>"/>       </td>
                        <td> <?php echo $item[2] ?> </td>
                        <td> <?php echo $item[3] ?> </td>
                        <td> <?php echo $item[4] ?> </td>
                        <td> <?php echo $item[5] ?> </td>
                       
                    </tr>

                </tbody>
                <?php
            }
            ?>

        </table>
<!--        <input type="number" id="cantidad" name="cantidad"/>-->
    </form>


</div>


<?php
include_once 'public/footer.php';
?>


