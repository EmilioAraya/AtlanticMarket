<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Minisúper Nólep</title> <!--titulo-->
        <meta name="descripcion" content="Sitio para poder pedir comida desde de tu casa."/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
        <link rel="shortcut icon" type="image/x-icon" href="public/img/ico.ico"/> <!-- icono de la parte superior -->
        <!-- Boostrap -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--link rel="stylesheet" type="text/css" href="public/css/estilo.css"/-->
        
        <link rel="shortcut icon" type="image/x-icon" href="public/img/ico.ico"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
        <link href="public/css/vendor/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="public/css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link href="public/css/jquery.bdt.css" type="text/css" rel="stylesheet">


    </head>


    <script>
      function js_eliminarUsuario(valor1){
     var parametros={
       "idUsuario":valor1

               };
               $.ajax(
                       {
                         data: parametros,
                         url: '?controlador=Item&accion=proceso_eliminar_usuarios',//metodo controler
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
                           
                           
                              function js_eliminarRol(valor1){
     var parametros={
       "iRol":valor1

               };
               $.ajax(
                       {
                         data: parametros,
                         url: '?controlador=Item&accion=proceso_eliminar_rol',//metodo controler
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

    
    

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <a class="navbar-brand" href="#">
                <img src="public/img/logoSuper.png" alt="Logo" class="logo">
            </a>

           
            <div class="collapse navbar-collapse" id="navbarNav">
                
                
                
                <ul class="navbar-nav"> 
                    
                    
                     <li>
            <a class="navbar-brand" href="index.php">Principal</a>

            </li>
                    
                    <li class="nav-item">
                            <span class="badge badge-primary badge-pill">1</span>
                        <a class="navbar-brand" href="?controlador=Item&accion=vistaAdmin">Ir a inicio</a>
                    </li>


                    <li class="nav-item">
                    
                        <a class="navbar-brand" href="?controlador=Item&accion=mostrar_notificaciones">Ver Notificaciones</a>


                  


                    </li>

                    <li class="nav-item">
                        <a class="navbar-brand" href="?controlador=Item&accion=logoutAdm">Cerrar  sessión</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           


                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <section id="contenido">
        <br>
        <section id="principal">
