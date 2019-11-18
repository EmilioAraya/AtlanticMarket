

<?php
include_once 'public/header.php';
?>




<div class="secciones">
    <article id="tab1">

        <form   method="post">
            <div>
                <input  name="nombreTarjeta"  id="nombreTarjeta" class="form-control" type="number" placeholder="Numero de la tarjeta">
            </div>
            <div>
            <input name="numeroTarjeta"  id="numeroTarjeta" class="form-control" type="text" placeholder="Nombre de la tarjeta">
            </div>
            <div>
            <input name="cvcTarjeta"  id="cvcTarjeta" class="form-control" type="number" placeholder="CVC">
            </div>
            <div>
            <input name="codigoPostalTarjeta"  id="codigoPostalTarjeta" class="form-control" type="number" placeholder="Código Postal">
          </div>
            <div>
            <input name="direccionPostalTarjeta"  id="direccionPostalTarjeta" class="form-control" type="text" placeholder="Dirección Postal: input">
           </div>
            <div>
            <input name="descripcionPagoTarjeta"  id="descripcionPagoTarjeta" class="form-control" type="text" placeholder="Descripcion factura">
           </div>
            <div>
            <input name="IdCliente"  id="IdCliente" class="form-control" type="number" placeholder="Identificador del cliente">
             </div>


            <button type="submit"  class="btn btn-primary" style="width: 160px;"  href="javascript:;" onclick="comprar($('#nombreTarjeta').val(),
                              $('#numeroTarjeta').val(),$('#cvcTarjeta').val(),$('#codigoPostalTarjeta').val(),$('#direccionPostalTarjeta').val()
                             , $('#descripcionPagoTarjeta').val());return false;"class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> 
                Comprar
            </button> 
        </form>        
       


    </article>
</div>


<?php
include_once 'public/footer.php';
?>


