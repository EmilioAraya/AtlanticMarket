

<?php
include_once 'public/headerCliente.php';
?>



<div class="modal-dialog text-center">
    <div class="col-sm-12 main-section">
        <div class="modal-content">
            <div class="col-12 user-img">
                <img src="public/static/img/paypal.svg" th:src="@{public/static/img/paypal.svg}"/>
            </div>

            <form action="?controlador=Item&accion=comprar_articulo" method="POST" class="col-12" th:action="@{/login}" >




                <div class="form-group" id="nombre-group">
                    <input type="number" required="" class="form-control" id="numeroTarjeta" name="numeroTarjeta" placeholder="Número Tarjeta: ">
                </div>





                <div class="form-group" id="quantyly-group">
                    <input type="number" class="form-control"  required="" id="codigoPostalTarjeta" name="codigoPostalTarjeta" placeholder="Código Postal Tarjeta: ">
                </div>







                <div class="form-group" id="direction-group">
                    <input type="text" class="form-control"  required="" id="direccionPostalTarjeta" name="direccionPostalTarjeta" placeholder="Direccion Postal: ">
                </div>



                <div class="form-group" id="description-group">
                    <input type="text" class="form-control" required="" id="descripcionPagoTarjeta" name="descripcionPagoTarjeta" placeholder="Descripcion: ">
                </div>





                <div class="form-group" id="boton-group">



                    <button type="submit"   style="width: 160px;"  href="javascript:;" onclick="js_enviar_compra($('#nombreTarjeta').val(),
                                    $('#numeroTarjeta').val(), $('#cvcTarjeta').val(), $('#codigoPostalTarjeta').val(), $('#direccionPostalTarjeta').val(),
                                    $('#descripcionPagoTarjeta').val());
                            return false;"class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> 
                        Comprar
                    </button> 


                </div>

            </form>



            <div   class="alert alert-success" role="alert">
                <img src="public/static/img/atras.png" th:src="@{public/static/img/atras.png}"/>
                <a href="?controlador=Item&accion=vistaAdmin">Regresar</a>
            </div>
        </div>
    </div>
</div>


<?php
include_once 'public/footer.php';
?>