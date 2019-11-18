<!DOCTYPE html>
<html lang="es">
    <head>
              <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-icon" href="img/ico.ico"/>

        
              <!-- Boostrap -->
<!--        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
        <link rel="shortcut icon" type="image/x-icon" href="public/img/icon.ico"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

      -->
<!--        <link href="public/css/vendor/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="public/css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link href="public/css/jquery.bdt.css" type="text/css" rel="stylesheet">
        
        <script type="text/javascript" src="public/js/jquery-3.3.1.js"></script>
       <script type="text/javascript" src="jquery.js"></script>-->
        
       
<!--         <link href="public/css/css.css" type="text/css" rel="stylesheet">-->
            <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="public/css/vendor/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="public/css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link href="public/css/jquery.bdt.css" type="text/css" rel="stylesheet">



       
        <script>
            
                  function realizarProceso(valor1, valor2){
               
               var parametros={
                  "valor1":valor1,
                  "valor2":valor2
               };
               $.ajax(
                       {
                         data: parametros,
                         url: '?controlador=Item&accion=proceso',
                         type: 'post',
                         beforeSend: function () {
                            $("#resultado").html("Procesando, \n\ espere por favor...");
                         },
                         success: function (response) {
                             $("#resultado").html(response);
                             
                             if(response){
                                 location.href= '?controlador=Item&accion=mostrar_vistaClienteArticulosAgregadosCarrito'); 
                             }else{
                        alert('error');
                                          }
                                      }
                                  }
                          );

                      } // realizarProceso
                 function jx_seleccionarProducto(valor1, valor3){
                        var parametros={
            "idsArticulo[]":valor1,
      //      "idCliente[]"  :    valor2
              "cantidad": valor3;

           
           };
           $.ajax(
                   {
                     data: parametros,
                     url: '?controlador=Item&accion=proceso_enviar_datos_carrito',//metodo controler
                     type: 'post',
                     beforeSend: function () {
                        $("#resultado").html("Procesando, \n\ espere por favor...");
                     },
                     success: function (response) {
                         $("#resultado").html(response);
                    if (response) {
                                          
                   location.href= '?controlador=Item&accion=mostrar_vistaClienteArticulosAgregadosCarrito');
                     } else {
                            location.href= '?controlador=Item&accion=mostrar_vista_compra');
                         alert('error');
                     }
                       }
                   }
               );
                                

                    }
                   
                   
                     function js_enviar_compra(valor1,valor2,valor3,valor4,valor5,valor6){
           var parametros={
               "nombreTarjeta":valor1,
               "numeroTarjeta":valor2,
               "cvcTarjeta":valor3,
               "codigoPostalTarjeta":valor4,
               "direccionPostalTarjeta":valor5,
               "descripcionPagoTarjeta":valor6
               

           
               };
               $.ajax(
                       {
                         data: parametros,
                         url: '?controlador=Item&accion=comprar_articulo',//metodo controler
                         type: 'post',
                         beforeSend: function () {
                            $("#resultado").html("Procesando, \n\ espere por favor...");
                         },
                         success: function (response) {
                             $("#resultado").html(response);
                               //  setTimeout(window.location='?controlador=Item&accion=vistaCompras',3000);
                               }
                       }
                       );
                       }
                       
                       
     function js_enviar_compraDirecta(valor1,valor2){
     var parametros={
       "idsArticulo":valor1,
         "cantidad": valor2
               };
               $.ajax(
                       {
                         data: parametros,
                         url: '?controlador=Item&accion=proceso_compra_directa',//metodo controler
                         type: 'post',
                         beforeSend: function () {
                            $("#resultado").html("Procesando, \n\ espere por favor...");
                         },
                         success: function (response) {
                             $("#resultado").html(response);
                               //  setTimeout(window.location='?controlador=Item&accion=vistaCompras',3000);
                               }
                           }
                           );
                           }


  function js_enviar_compraCombo(valor1,valor2){
     var parametros={
       "idsArticulo":valor1,
         "cantidad": valor2
               };
               $.ajax(
                       {
                         data: parametros,
                         url: '?controlador=Item&accion=comprar_promo',//metodo controler
                         type: 'post',
                         beforeSend: function () {
                            $("#resultado").html("Procesando, \n\ espere por favor...");
                         },
                         success: function (response) {
                             $("#resultado").html(response);
                               //  setTimeout(window.location='?controlador=Item&accion=vistaCompras',3000);
                               }
                           }
                           );
                           }

        </script>

    </head>
    <body>
 

           <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="collapse navbar-collapse    " id="navbarNav">
                <ul class="navbar-nav"> 
                    
                    <li class="nav-item">
                        
                <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=mostrar_Vista_Cliente_Articulos">Tienda </a> 
                    </li>
                    
                      <li class="nav-item">
                        
                <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=mostrar_promos">Ver Promociones </a> 
                    </li>
                   
<!--                 
-->                    <li class="nav-item">
                        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=principalClienteCompras">Comprar</a> 
                    </li><!--
                    
                    <li class="nav-item">
                        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=mostrar_ArticulosAgregadosCarrito">Comprar </a> 
                    </li>
                    -->
                    
<!--                    <li class="nav-item">
                      <a  class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=mostrar_ArticulosAgregadosCompraDirecta">Comprar directamente</a> 
                    </li>
                    -->
                    

                    
                    
<!--                    <li class="nav-item">
                        <a class="nav-link" href="?controlador=Item&accion=mostrar_ArticulosAgregadosCarrito">Ver carrito </a>
                    </li>-->

<!--                    <li class="nav-item">
                        <a class="nav-link" href="?controlador=Item&accion=mostrarHistorialCompra">Historial  de compras </a>
                    </li>
-->

<li class="nav-item">
    <a class="nav-link" href="?controlador=Item&accion=mostrar_carritos">Ver mi carritos </a>
</li>



<!--                    
-->                        <li class="nav-item">
    <a class="nav-link" href="?controlador=Item&accion=mostrar_historial    "> Ver movimientos </a>
</li><!--
-->

<ul class="navbar-nav">                
    <li class="nav-item">
        <a class="navbar-brand" href="?controlador=Item&accion=logoutCliente">Salir</a>
    </li>
</ul>
                </ul>
            </div>
           </nav>

           <section id="contenido">
               <section id="principal">
