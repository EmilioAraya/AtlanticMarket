<?php
include_once 'public/headerAdmin.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Minisúper Nólep</title> <!--titulo-->
        <meta name="descripcion" content="Sitio para poder pedir comida desde de tu casa."/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
        <link rel="shortcut icon" type="image/x-icon" href="img/logoFlor.ico"/> <!-- icono de la parte superior -->
        <!-- Boostrap -->
        
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/x-icon" href="img/icono.ico"/>

    </head>
    
      <br /><br />
  <div class="container" style="width:600px;">
  
      
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">        
        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=crearUsuario_Admin">Crear Usuario</a>
    </nav>

      
         <nav class="navbar navbar-expand-sm navbar-dark bg-dark">        
        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=mostrar_usuarios">Listar Usuarios</a>
    </nav>
      
      
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">        
        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=vista_creacionRoles">Crear Rol</a>
    </nav>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">        
        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=mostrar_roles">Vista Roles</a>
    </nav>
      
      
      
   

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">       
        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=insertar">Añadir articulo</a>
    </nav>

  
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">        
        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=vistaCodigoModificar">Modificar articulo</a>
    </nav>

  
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">       
        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=eliminarArticulo">Eliminar articulo</a>
    </nav>


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">       
        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=vistaListarArticulos">Ver listado</a>
    </nav>

      
      
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">       
        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=combos">Crear Combos</a>
    </nav>
      
      
         
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">       
        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=listarDesgloseCompraClientes">Mostrar Historial clientes</a>
    </nav>

         <nav class="navbar navbar-expand-sm navbar-dark bg-dark">       
        <a class="flex-sm-fill text-sm-center nav-link active" href="?controlador=Item&accion=historial_combos">Mostrar Historial combos</a>
    </nav>

      
   
      
        <br />
  </div>
    <?php
    include_once 'public/footer.php';
    ?>