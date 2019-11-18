<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Minisúper Nólep</title> titulo
        <meta name="descripcion" content="Sitio para poder pedir comida desde de tu casa."/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
        <link rel="shortcut icon" type="image/x-icon" href="img/logoFlor.ico"/> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--        link rel="stylesheet" type="text/css" href="public/css/estilo.css"/-->

        <link rel="shortcut icon" type="image/x-icon" href="public/img/ico.ico"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>





    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <a class="navbar-brand" href="#">
                <img src="public/img/logoSuper.png" alt="Logo" class="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">  



                    
                    
                    

                    <?php if (($_SESSION['tipoRol'][0] == 1)) { ?>
                        <li nav navbar-nav>
                            <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_insertar_usuario">Insertar </a>
                        </li>

                    <?php } ?>


                    <?php if (($_SESSION['tipoRol'][0] == 2)) { ?>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario">Modificar</a>
                            </li>
                        <?php } ?>

                        <?php if (($_SESSION['tipoRol'][0] == '3')) { ?>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_eliminar_usuario"> Eliminar</a>
                            </li>
                        <?php } ?>

                        <?php if (($_SESSION['tipoRol'][0] == 4)) { ?>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_consultar_usuario"> Consultar</a>
                            </li>
                        <?php } ?>


                            
                            
                              <?php if (($_SESSION['tipoRol'][0] == 5)) { ?>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_combos_usuario"> Combos</a>
                            </li>
                        <?php } ?>


                            
                   <!------------------------------------------------------------------------------------------------------>
                            



                   <?php if (($_SESSION['tipoRol'][0] == 15) || ($_SESSION['tipoRol'][0] == 51)) { ?>

                       <li nav navbar-nav>
                           <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_insertar_usuario"> Insertar</a>
                       </li>
                       <li nav navbar-nav>
                           <a class="navbar-brand" href="?controlador=Item&accion=mostrar_combos_usuario"> Combos</a>
                       </li>
                   <?php } ?>
                       
                       
                       
                       
                           <?php if (($_SESSION['tipoRol'][0] == 25) || ($_SESSION['tipoRol'][0] == 52)) { ?>

                       <li nav navbar-nav>
                           <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario"> Modificar</a>
                       </li>
                       <li nav navbar-nav>
                           <a class="navbar-brand" href="?controlador=Item&accion=mostrar_combos_usuario"> Combos</a>
                       </li>
                   <?php } ?>
                       
                       
                       
                        
                           <?php if (($_SESSION['tipoRol'][0] == 35) || ($_SESSION['tipoRol'][0] == 53)) { ?>

                       <li nav navbar-nav>
                           <a class="navbar-brand" href="?controlador=Item&mostrar_vista_eliminar_usuario"> Eliminar</a>
                       </li>
                       <li nav navbar-nav>
                           <a class="navbar-brand" href="?controlador=Item&accion=mostrar_combos_usuario"> Combos</a>
                       </li>
                   <?php } ?>
                       

                       
                          <?php if (($_SESSION['tipoRol'][0] == 45) || ($_SESSION['tipoRol'][0] == 54)) { ?>

                       <li nav navbar-nav>
                    <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_consultar_usuario"> Consultar</a>
                       </li>
                       <li nav navbar-nav>
                           <a class="navbar-brand" href="?controlador=Item&accion=mostrar_combos_usuario"> Combos</a>
                       </li>
                   <?php } ?>
                       
                       

                       <?php if (($_SESSION['tipoRol'][0] == 12345) || ($_SESSION['tipoRol'][0] == 54321)) { ?>

                           <li nav navbar-nav>
                               <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_insertar_usuario">Insertar </a>
                           </li>

                           <li nav navbar-nav>
                               <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario">Modificar</a>
                           </li>
                           <li nav navbar-nav>
                               <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_eliminar_usuario"> Eliminar</a>
                           </li>

                           <li nav navbar-nav>
                             
                               <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_consultar_usuario"> Consultar</a>
                           </li>
                           <li nav navbar-nav>
                               <a class="navbar-brand" href="?controlador=Item&accion=mostrar_combos_usuario"> Combos</a>
                           </li>
                       <?php } ?>
                       
                           
                              <?php if (($_SESSION['tipoRol'][0] == 1245) || ($_SESSION['tipoRol'][0] == 5421)) { ?>

                           <li nav navbar-nav>
                               <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_insertar_usuario">Insertar </a>
                           </li>

                           <li nav navbar-nav>
                               <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario">Modificar</a>
                           </li>
                         

                           <li nav navbar-nav>
                              
                                  <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_consultar_usuario"> Consultar</a>
                           </li>
                           <li nav navbar-nav>
                               <a class="navbar-brand" href="?controlador=Item&accion=mostrar_combos_usuario"> Combos</a>
                           </li>
                       <?php } ?>
                           
                           
                                    <?php if (($_SESSION['tipoRol'][0] == 1235) || ($_SESSION['tipoRol'][0] == 5321)) { ?>

                           <li nav navbar-nav>
                               <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_insertar_usuario">Insertar </a>
                           </li>

                           <li nav navbar-nav>
                               <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario">Modificar</a>
                           </li>
                         

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_eliminar_usuario"> Eliminar</a>
                            </li>
                           <li nav navbar-nav>
                               <a class="navbar-brand" href="?controlador=Item&accion=mostrar_combos_usuario"> Combos</a>
                           </li>
                       <?php } ?>
                       

                   <!-- 2 OPCIONES  INSERCION ---->

                   <?php if (($_SESSION['tipoRol'][0] == 12) || ($_SESSION['tipoRol'][0] == 21)) { ?>
                       <li nav navbar-nav>
                           <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_insertar_usuario">Insertar </a>
                       </li>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario">Modificar</a>
                            </li>
                        <?php } ?>


                        <?php if (($_SESSION['tipoRol'][0] == 13) || ($_SESSION['tipoRol'][0] == 31)) { ?>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_insertar_usuario">Insertar </a>
                            </li>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_eliminar_usuario"> Eliminar</a>
                            </li>
                        <?php } ?>


                        <?php if (($_SESSION['tipoRol'][0] == 14) || ($_SESSION['tipoRol'][0] == 41)) { ?>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_insertar_usuario">Insertar </a>
                            </li>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_consultar_usuario"> Consultar</a>
                            </li>
                        <?php } ?>


                        <!-- 2 OPCIONES  INSERCION ---->



                        <!---------2 OPCIONES ACTUALIZAR-------------------------->

                        <?php if (($_SESSION['tipoRol'][0] == 23) || ($_SESSION['tipoRol'][0] == 32)) { ?>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario">Actualizar </a>
                            </li>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_eliminar_usuario"> Eliminar</a>
                            </li>
                        <?php } ?>


                        <?php if (($_SESSION['tipoRol'][0] == 24) || ($_SESSION['tipoRol'][0] == 42)) { ?>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario">Actualizar </a>
                            </li>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_consultar_usuario"> Consultar</a>
                            </li>
                        <?php } ?>
                        <!---------2 OPCIONES ACTUALIZAR-------------------------->




                        <!----------Eliminar------------>


                        <?php if (($_SESSION['tipoRol'][0] == 34) || ($_SESSION['tipoRol'][0] == 43)) { ?>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_eliminar_usuario">Eliminar </a>
                            </li>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_consultar_usuario"> Consultar</a>
                            </li>
                        <?php } ?>


                        <?php if (($_SESSION['tipoRol'][0] == 24) || ($_SESSION['tipoRol'][0] == 42)) { ?>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario">Actualizar </a>
                            </li>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_consultar_usuario"> Consultar</a>
                            </li>
                        <?php } ?>

                        <!----------Eliminar------------>








                        <!----------------3 OPCIONES----------------->

                        <?php if (($_SESSION['tipoRol'][0] == 123) || ($_SESSION['tipoRol'][0] == 321)) { ?>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_insertar_usuario">Insertar </a>
                            </li>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario">Modificar</a>
                            </li>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_eliminar_usuario"> Eliminar</a>
                            </li>


                        <?php } ?>


                        <?php if (($_SESSION['tipoRol'][0] == 234) || ($_SESSION['tipoRol'][0] == 432)) { ?>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario">Modificar </a>
                            </li>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_eliminar_usuario">Eliminar</a>
                            </li>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_consultar_usuario"> Consultar</a>
                            </li>


                        <?php } ?>

                        <?php if (($_SESSION['tipoRol'][0] == 124) || ($_SESSION['tipoRol'][0] == 421)) { ?>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_insertar_usuario">Insertar </a>
                            </li>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario">Modificar</a>
                            </li>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_consultar_usuario"> Consultar</a>
                            </li>


                        <?php } ?>


                        <?php if (($_SESSION['tipoRol'][0] == 134) || ($_SESSION['tipoRol'][0] == 431)) { ?>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_insertar_usuario">Insertar </a>
                            </li>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_eliminar_usuario">Eliminar</a>
                            </li>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_consultar_usuario"> Consultar</a>
                            </li>


                        <?php } ?>




                        <?php if (($_SESSION['tipoRol'][0] == 1234) || ($_SESSION['tipoRol'][0] == 4321)) { ?>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_insertar_usuario">Insertar </a>
                            </li>

                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=actualizrVistaUsuario">Modificar</a>
                            </li>
                            
                             <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_eliminar_usuario">Eliminar</a>
                            </li>
                            <li nav navbar-nav>
                                <a class="navbar-brand" href="?controlador=Item&accion=mostrar_vista_consultar_usuario"> Consultar</a>
                            </li>


                        <?php } ?>



                        <li nav navbar-nav navbar-right>
                            <a class="navbar-brand" href="?controlador=Item&accion=logoutAdm">Cerrar sesion</a>
                        </li>



                </ul>
            </div>
        </nav>
    </header>
    <section id="contenido">
        <br>
        <section id="principal">
