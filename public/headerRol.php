<html>
 <head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
   
<!------>
<!--  
  
link rel="stylesheet" type="text/css" href="public/css/estilo.css"/-->
        
        <link rel="shortcut icon" type="image/x-icon" href="public/img/ico.ico"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
        <!------>
        
 </head>

     
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
 <body>
 
     
        <script>
            
               function js_roles(valor1){
               
            var parametros={
               "framework1[]":valor1
          
              
            };
            $.ajax(
                    {
                      data: parametros,
                      url: '?controlador=Item&accion=crearRole',
                      type: 'post',
                      beforeSend: function () {
                         $("#resultado").html("Procesando, \n\ espere por favor...");
                      },
                      success: function (response) {
                          $("#resultado").html(response);
                             
                          if(response){
                              location.href= '?controlador=Item&accion=vista_creacionRoles');
                                       } else {
                                           alert('error');
                                       }
                                   }
                               }
                       );

                   } // realizarProceso
        </script>