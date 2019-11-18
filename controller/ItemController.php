<?php

session_start();
if (!isset($_SESSION['idProductos'])) {
    $_SESSION['idProductos'] = '';
}

if (!isset($_SESSION['idCliente'])) {
    $_SESSION['idCliente'] = '';
}

if (!isset($_SESSION['tipoRol'])) {
    $_SESSION['tipoRol'] = '';
}

class ItemController {
    
   
  
    

    public function __construct() {
        $this->view = new View();
    }
    
      public function mostrar_combos_usuario(){
        
         $this->view->show("vistaCombosUsuario.php");
    }

    /*Este metodo muestra los aticulos agregados al carrito*/
    public function mostrar_carritos() {
        require 'model/ItemModel.php';
        $items = new ItemModel();

        $idCliente = $_SESSION['idCliente'];
        $data['listadoCarrito'] = $items->listarArticulosAgregadosCarrito($idCliente);
        $this->view->show("vistaClienteArticulosAgregadosCarrito.php", $data);
    }

    /*Muestra  la el historial de compral del cliente*/
    public function mostrar_historial() {
        $this->view->show("historialCliente.php");
    }

    
    /*Pantalla principal cliente*/
    public function principalClienteCompras() {
        $this->view->show("principalClienteCompras.php");
    }

    
    ///**vista pra insertar  articulos,desde el usuario*/
    public function mostrar_vista_insertar_usuario() {
        $this->view->show('vistaUsuarioInsertar.php');
    }

    /*Elimina usuarios ingresados*/
    public function mostrar_vista_eliminar_usuario() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listaArticulos'] = $items->listarArticulos();
        $this->view->show("vistaUsuarioEliminar.php", $data);
    }

    /*por medio de este metodo, el usuario puede modificar articulos de la tabla*/
    public function mostrar_vista_actualizar_usuario() {
        $this->view->show('vistaUsuarioActualizar.php');
    }

    
    /*al darle privilegios al usuario puede consultar los articulos disponibles*/
    public function mostrar_vista_consultar_usuario() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listaArticulos'] = $items->listarArticulos();
        $this->view->show("vistaUsuarioConsultar.php", $data);
    }
    
    
    
    /*muestra modificaciones de articulos menores*/
     public function mostrar_notificaciones(){
         require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listadoProductoMasBajo'] = $items->cantidadProductosMenores();
        $this->view->show("notificaciones.php", $data);
        
        
    }

    
    
    /*esta  vista para registrar clientes*/
    public function registrarClientes() {
        $this->view->show('registrarClientes.php');
    }

    
    /**obtenemos los datos ingresados por la vista de ingresar, y los guardamos en la BD*/
    public function validarClientes() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $nombre = $_POST['nombre'];
        $usuario = $_POST['username'];
        $contra = $_POST['password'];
        $correo = $_POST['correo'];
        $idCliente = $_POST['id'];

        //    echo ''.$nombre.$usuario.$contra.$correo.$idCliente;
        if ($nombre != null && $usuario != null && $contra != null && $correo != null && $idCliente != null) {
            $items->registrarClientes($nombre, $usuario, $contra, $correo, $idCliente);
        }
        $this->view->show('loginCliente.php');
    }

    //compra directamente, y lo redirecciona a la vista de tarjeta
    public function proceso_compra_directa() {
        require 'model/ItemModel.php';
        $items = new ItemModel();


        $arrayidProducto = $_POST["idsArticulo"];
        $arrayidCliente = $_SESSION['idCliente'];

        $cantidad = $_POST["cantidadProductos"];
        echo '' . $arrayidProducto;


        if ($arrayidProducto != null && $cantidad != null && $arrayidCliente != null) {
            echo 'idP ' . $arrayidProducto . ', idCliente ' . $arrayidCliente . ',  cantidad -> ' . $cantidad;


            $items->mis_articulos_comprados($cantidad, $arrayidProducto, $arrayidCliente);
            $items->eliminar_articulo_agregado_al_carrito($arrayidProducto);

            $this->view->show("vistaClienteCompras.php");
        }
        
    }

//veo el listado de productos disponibles
    public function mostrar_Vista_Cliente_Articulos() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listado'] = $items->listarArticulos();
        $this->view->show("vistaClienteArticulos.php", $data);
    }

    //lista los articulos que hay disponibles
    public function vistaListarArticulos() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listado'] = $items->listarArticulos();
        $this->view->show("vistaListarArticulos.php", $data);
    }

    
    /*insertar articulos*/
    public function insertar() {
        require 'model/ItemModel.php';
        $items = new ItemModel();


        $this->view->show("vistaInsertarArticulo.php");


        $codigo = filter_input(INPUT_POST, 'codigo');
        $nombre = filter_input(INPUT_POST, 'nombre');
        $precio = filter_input(INPUT_POST, 'precio');
        $categoria = filter_input(INPUT_POST, 'categoria');
        $cantidad = filter_input(INPUT_POST, 'cantidad');
//      if (!empty($_FILES['Imagen']['tmp_name']) && file_exists($_FILES['Imagen']['tmp_name'])) {
//            $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
//        
//           // $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));


        if ($codigo != null && $nombre != null && $precio != null && $categoria != null && $cantidad != null) {
            $items->insertar($codigo, $nombre, $categoria, $precio, $cantidad);

            $message = 'El producto ha sido insertado exitosamente.';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
            
                     $message = 'Datos vacios, verifique su información';
            echo "<script type='text/javascript'>alert('$message');</script>";   
        }
    }
/*Captura los datos de la vista, pra insertarlos a la BD*/
    public function insertarUsuario() {
        require 'model/ItemModel.php';
        $items = new ItemModel();


        $this->view->show("vistaUsuarioInsertar.php");


        $codigo = filter_input(INPUT_POST, 'codigo');
        $nombre = filter_input(INPUT_POST, 'nombre');
        $precio = filter_input(INPUT_POST, 'precio');
        $categoria = filter_input(INPUT_POST, 'categoria');
        $cantidad = filter_input(INPUT_POST, 'cantidad');
//      if (!empty($_FILES['Imagen']['tmp_name']) && file_exists($_FILES['Imagen']['tmp_name'])) {
//            $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
//        
//           // $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));


        if ($codigo != null && $nombre != null && $precio != null && $categoria != null && $cantidad != null) {
            $items->insertar($codigo, $nombre, $categoria, $precio, $cantidad);

            $message = 'El producto ha sido insertado exitosamente.';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
            
                     $message = 'Datos vacios, verifique su información';
            echo "<script type='text/javascript'>alert('$message');</script>"; 
            
        }
    }

    
    /*  Extraemmos valores del formualrio y los insertamos en la BD*/
    public function metodo_combo() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
        $codigoPromo = $_POST['idCombo'];
        $titulo = $_POST['titulo'];
        $precioCombo = $_POST['precio'];
        $cantidad = $_POST['cantidad'];

        if ($Imagen != null && $codigoPromo != NULL && $titulo != null && $precioCombo != null && $cantidad!=NULL) {

//        
            $items->insertar_combo($codigoPromo, $Imagen, $precioCombo, $titulo, $cantidad);
            
              $message = 'Combo ingresado exitosamente';
        echo "<script type='text/javascript'>alert('$message');</script>";
     
         $this->view->show("combos.php");
        }
//         $message = 'Verifica tu información';
//        echo "<script type='text/javascript'>alert('$message');</script>";
//         $this->view->show("combo.php");
       
    }

    
    /*MUestra los roles creados por el admin*/
    public function mostrar_roles() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listado'] = $items->mostrarRoles();
        $this->view->show("vista_verRoles.php", $data);
    }
    
    /*Muestra usuarios  registrados de la BD*/

    public function mostrar_usuarios() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listado'] = $items->mostrarUsuarios();
        $this->view->show("vistar_Usuarios_creados.php", $data);
    }

    
    /*Elimina usuarios de la BD*/
    public function proceso_eliminar_usuarios() {
        echo 'J';
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $idUsuario = filter_input(INPUT_POST, 'idUsuario');
        echo 'Id usuario:' . $idUsuario;
        $items->eliminarUsuario($idUsuario);

        $data['listado'] = $items->mostrarUsuarios();
        $this->view->show("vistar_Usuarios_creados.php", $data);
    }

    
    /*Elimina roles de la BD*/
    public function proceso_eliminar_rol() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $id = $_POST['idRol'];
     //   echo 'HOLA';
        $items->eliminarRol($id);

        $data['listado'] = $items->mostrarRoles();
        $this->view->show("vista_verRoles.php", $data);
    }

    
    /*CREA nuevos usuarios, en esta parte Obtenemos los valores de la vista, y los insertamos a la BD*/
    public function newUsuario() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $nombreUsuario = filter_input(INPUT_POST, 'nombreUsuario'); //$_POST['nombreUsuario'];
        $nombre = filter_input(INPUT_POST, 'nombre'); //$_POST['nombre'];
        $contra = filter_input(INPUT_POST, 'contra'); //$_POST['contra'];
        $correo = filter_input(INPUT_POST, 'correo'); //$_POST['correo'];
        // echo ''.$nombreUsuario.$nombre.$correo.$contra;
        if ($nombreUsuario != null && $nombre != null) {
            $items->insertarUsuario($nombreUsuario, $nombre, $contra, $correo);
            $message = 'Se ha insertado el usuario: ' . $nombre . ', exitosamente....';
            echo "<script type='text/javascript'>alert('$message');</script>";
             $this->view->show('crearUsuarios_Admin.php');
        }
        else{
            $message = 'Verifica tus datos ingresados!';
        echo "<script type='text/javascript'>alert('$message');</script>";
            
            
        }
        
//        $this->view->show('crearUsuarios_Admin.php');
    }

    
    /*vista insertar*/
    public function vista_insertar_articulo() {
        $this->view->show('vistaInsertarArticulo.php');
    }

    
    /*Cierra la session*/
    public function logoutAdm() {
        unset($_SESSION['nombrePersona']);
        $this->view->show("loginAdmin.php");
    }

    public function logoutCliente() {
        unset($_SESSION['idCliente']);
        $this->view->show("loginCliente.php");
    }

    
    
    /*Actualiza datos ingresados por el usuario*/
    public function actualizarDatos() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];

        $cantidad = $_POST['cantidad'];
        $items->actualizar($codigo, $nombre, $categoria, $precio, $cantidad);

        $data['listado'] = $items->listarArticulos();
        $this->view->show("vistaListarArticulos.php", $data);
    }
     public function actualizarDatos2() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];

        $cantidad = $_POST['cantidad'];
        $items->actualizar($codigo, $nombre, $categoria, $precio, $cantidad);
         $this->view->show("vistaUsuarioModificarCodigo.php");
        //$data['listado'] = $items->listarArticulos();
        //$this->view->show("vistaListarArticulos.php", $data);
    }

    public function actualizarVista() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
      if($data['listadoBuscar'] = $items->buscarActualizar($_POST['codigo'])){
       $this->view->show("vistaActualizar.php", $data);
          
      }else{
                $this->view->show("vistaCodigoModificar.php");
          $message = 'Verifica tus datos ingresados!';
        echo "<script type='text/javascript'>alert('$message');</script>";
        
          
      }
        
    }

    public function actualizarVista2() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listadoBuscar'] = $items->buscarActualizar($_POST['codigo']);
        $this->view->show("actualizarvistaUsuario.php", $data);
    }

    public function actualizrVistaUsuario() {
        $this->view->show("vistaUsuarioModificarCodigo.php");
    }

//    
//    public function actualizarDatos2() {
//        require 'model/ItemModel.php';
//        $items = new ItemModel();
//        $codigo = $_POST['codigo'];
//        $nombre = $_POST['nombre'];
//        $precio = $_POST['precio'];
//        $categoria = $_POST['categoria'];
//
//        $cantidad = $_POST['cantidad'];
//        $items->actualizar($codigo, $nombre, $categoria, $precio, $cantidad);
//        $this->view->show("actualizarVistaUsuario.php", $data);
//        $data['listado'] = $items->listarArticulos();
//        $this->view->show("actualizarVistaUsuario.php", $data);
//        
//          $message = 'Datos modificados correctamente';
//        echo "<script type='text/javascript'>alert('$message');</script>";
//        
//    }



    public function vistaCodigoModificar() {
        $this->view->show("vistaCodigoModificar.php", null);
    }

////metodo que me  elimina un  producto de la vista
    public function proceso_eliminar_compra() {

        require 'model/ItemModel.php';
        $items = new ItemModel();
        if ((!empty($_POST["idsElimina"]) && is_array($_POST["idsElimina"]))) {
            $arrayidEliminar = $_POST["idsElimina"];
            $array_num = count($arrayidEliminar);
            for ($i = 0; $i < $array_num; $i++) {


                $items->eliminar_articulo_agregado_al_carrito($arrayidEliminar[$i]);
            }
        }
        $idCliente = $_SESSION['idCliente'];
        $data['listadoCarrito'] = $items->listarArticulosAgregadosCarrito($idCliente);
        $this->view->show("vistaClienteEliminarArticulo.php", $data);
    }

    public function eliminarArticulo() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
//        $this->view->show("vistaEliminarArticulo.php");
//        $codigo = filter_input(INPUT_POST, 'codigo');
//        $items->eliminarArticulo($codigo);
        $data['listadoCarrito'] = $items->listarArticulos();
        $this->view->show("vistaEliminarArticulo.php", $data);
    }

    //envia los datos que quiere al carrito
    public function proceso_enviar_datos_carrito() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        if ((!empty($_POST["idsArticulo"]) && is_array($_POST["idsArticulo"]))) {
            $arrayidProducto = $_POST["idsArticulo"];
            $arrayidCliente = $_SESSION['idCliente'];
            $array_num = count($arrayidProducto);
            for ($i = 0; $i < $array_num; $i++) {
                echo '' . $arrayidProducto[$i];
                $items->agregar_Carrito($arrayidProducto[$i], $arrayidCliente);
                $resultado = $arrayidCliente;
                echo $resultado;
            }
        }
        $message = 'Articulos agregados al carrito con exito';
        echo "<script type='text/javascript'>alert('$message');</script>";
        $data['listado'] = $items->listarArticulos();
        $this->view->show("vistaClienteArticulos.php", $data);
    }

    //Muestra los articulos agregados al carrito y podemos seleccionar cuales comprar
    public function mostrar_ArticulosAgregadosCarrito() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $idCliente = $_SESSION['idCliente'];
        $data['listadoCarrito'] = $items->listarArticulosAgregadosCarrito($idCliente);
        $this->view->show("vistaClienteArticulosAgregadosCarrito.php", $data);
    }

    //elimina un producto de carrito
    public function eliminar_articulo_del_carrito() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $idCliente = $_SESSION['idCliente'];
        $data['listadoCarrito'] = $items->listarArticulosAgregadosCarrito($idCliente);
        $this->view->show("vistaClienteEliminarArticulo.php", $data);
    }

    //muestra la vista de compras directa
    public function mostrar_ArticulosAgregadosCompraDirecta() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $idCliente = $_SESSION['idCliente'];
        $data['listadoCarrito'] = $items->listarArticulosAgregadosCarrito($idCliente);
        $this->view->show("vistaClienteCompraDirecta.php", $data);
    }

    //muestra la vista para pagar con tarjeta
    public function mostrar_vista_compra() {
        $this->view->show("vistaClienteCompras.php", null);
    }

    public function mostrar_mi_carrito() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $idCliente = $_SESSION['idCliente'];
        $data['listadoCarrito'] = $items->listarArticulosAgregadosCarrito($idCliente);
        $this->view->show("vistaCarrito.php", $data);
    }

    public function listar_compra_total_combos() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $idCliente = $_SESSION['idCliente'];
        $data['listado'] = $items->listar_compra_total_combos($idCliente);
        $this->view->show("vista_compra_total_combos.php", $data);
    }

    public function loginAdmin() {

        $this->view->show("loginAdmin.php");
    }

    public function vistaAdmin() {
        $this->view->show("vistaAdmin.php");
    }

    public function inicioSesionAdmin() {

        require 'model/ItemModel.php';
        $items = new ItemModel();
        $usuarioCliente = $_POST['username'];
        $contra = $_POST['password'];
        $resultado = $items->inicioSesionAdmin($usuarioCliente, $contra);
        if ($resultado != null) {

            $this->view->show("vistaAdmin.php");
        } else {
            $message = 'Contraseña/Usuario incorrecto';
            echo "<script type='text/javascript'>alert('$message');</script>";
            $this->view->show("loginAdmin.php");
        }
    }

    public function proceso_efectuar_compra_carrito() {
        $flag = false;
        require 'model/ItemModel.php';
        $items = new ItemModel();

        if ((!empty($_POST["idsArticulo"]) && is_array($_POST["idsArticulo"]))) {
            if ((!empty($_POST["cantidad"]) && is_array($_POST["cantidad"]))) {
                $_SESSION['idProducto'] = $_POST["idsArticulo"];
                $arrayidProducto = $_POST["idsArticulo"];
                $arrayidCliente = $_SESSION['idCliente'];
                $cantidad = $_POST['cantidad'];
                $array_num = count($arrayidProducto);
                for ($i = 0; $i < $array_num; $i++) {

                    if ($arrayidProducto != null && $arrayidCliente != null && $cantidad != null) {
                        $items->mis_articulos_comprados($cantidad[$i], $arrayidProducto[$i], $arrayidCliente);
                        $items->eliminar_articulo_agregado_al_carrito($arrayidProducto[$i]);
                    }
                }
            }
        }
        $message = 'Verificacion de datos';
        echo "<script type='text/javascript'>alert('$message');</script>";
        $this->view->show("vistaClienteCompras.php", null);
    }

    public function comprar_Combo() {
        require 'model/ItemModel.php';
        $items = new ItemModel();

        $numeroTarjeta = $_POST['numeroTarjeta'];
        $codigoPostal = $_POST['codigoPostalTarjeta'];
        $direccionPostal = $_POST['direccionPostalTarjeta'];
        $descripcion = $_POST['descripcionPagoTarjeta'];
        $idCliente = $_SESSION['idCliente'];

        echo '' . $numeroTarjeta . $codigoPostal . $direccionPostal . $descripcion . $idCliente;

        if ($numeroTarjeta != null && $codigoPostal != null && $direccionPostal != null && $descripcion != null && $idCliente != null) {
            $items->realizar_pago($numeroTarjeta, $codigoPostal, $direccionPostal, $descripcion, $idCliente);
            $message = 'Compra realizada con exito';
            echo "<script type='text/javascript'>alert('$message');</script>";
            $data['listaPromociones'] = $items->listarPromociones();
            $this->view->show("crearPromociones.php", $data);
        } else {

            $message = 'Error';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    public function comprar_articulo() {
        require 'model/ItemModel.php';
        $items = new ItemModel();


        //  $nombreTarjera = $_POST['nombreTarjeta'];
        $numeroTarjeta = $_POST['numeroTarjeta'];
        //   $cvc = $_POST['cvcTarjeta'];
        $codigoPostal = $_POST['codigoPostalTarjeta'];
        $direccionPostal = $_POST['direccionPostalTarjeta'];
        $descripcion = $_POST['descripcionPagoTarjeta'];
        $idCliente = $_SESSION['idCliente'];


        //echo 'NOMBRE-> ' . $nombreTarjera . ',NUMEROTARJE-> ' . $numeroTarjeta .  ' DIRECPOSTAL->  ' . $direccionPostal . 'DESCRIPCION-> ' . $descripcion . $idCliente;

        if ($numeroTarjeta != null && $codigoPostal != null && $direccionPostal != null && $descripcion != null && $idCliente != null) {
            //  echo 'Pago realizado';
//            if ((!empty($_SESSION['idProducto']) && is_array($_SESSION['idProducto']))) {
//                $arrayidProducto = $_SESSION['idProducto'];
//                echo 'Pago realizado 2';
//                $array_num = count($arrayidProducto);
//                echo 'Pago realizado3 ';
//                for ($i = 0; $i < $array_num; $i++) {
//                    $arrayidProducto = $_SESSION['idProducto'];
//
            $items->realizar_pago($numeroTarjeta, $codigoPostal, $direccionPostal, $descripcion, $idCliente);
//                    echo 'Pago realizado 4 -> ' . $arrayidProducto[$i];
//                }
//            }

            $message = 'Compra realizada con exito';
            echo "<script type='text/javascript'>alert('$message');</script>";

            $data['listado'] = $items->listarArticulos();
            $this->view->show("vistaClienteArticulos.php", $data);
        } else {
            echo "Hubo un problemaa";
        }
    }

    public function combos() {

        $this->view->show("combos.php");
    }

    public function loginCliente() {

        $this->view->show("loginCliente.php");
    }

  

    public function mostrar_promos() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listaPromociones'] = $items->listarPromociones();
        $this->view->show("crearPromociones.php", $data);
    }

    public function comprar_promo() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $idPromo = $_POST['idPromo'];
        $idCantidadPromos = $_POST['cantidad'];
        $idCliente = $_SESSION['idCliente'];
        //  echo ''.$idPromo.$idCantidadPromos.$idCliente;

        if ($idPromo != null && $idCantidadPromos != null) {
            $items->comprar_combos($idPromo, $idCantidadPromos, $idCliente);
            $this->view->show("vistaClienteComprasCombos.php");
//         $data['listaPromociones'] = $items->listarPromociones();
//        $this->view->show("crearPromociones.php", $data);

            $message = 'Combo comprado con exito';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    public function loginUsuario() {
        $this->view->show("loginUsuario.php");
        // $this->view->show("ejemplo.php");
    }

    public function proceso_eliminar_admin() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        // echo "<script type='text/javascript'>alert('hola1');</script>";
        if ((!empty($_POST["idsElimina"]) && is_array($_POST["idsElimina"]))) {
            //   echo "<script type='text/javascript'>alert('hola2');</script>";
            $arrayidEliminar = $_POST["idsElimina"];
            // echo "<script type='text/javascript'>alert('hola3');</script>";
            $array_num = count($arrayidEliminar);
            // echo "<script type='text/javascript'>alert('hola4');</script>";
            for ($i = 0; $i < $array_num; $i++) {
                // echo ' ' . $arrayidEliminar[$i];
                echo "<script type='text/javascript'>alert('$arrayidEliminar[$i]');</script>";
                $items->eliminarArticulo($arrayidEliminar[$i]);
            }
        }


        $data['listadoCarrito'] = $items->listarArticulos();
        $this->view->show("vistaEliminarArticulo.php", $data);
    }
    
    public function proceso_eliminar_usuario() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        // echo "<script type='text/javascript'>alert('hola1');</script>";
        if ((!empty($_POST["idsElimina"]) && is_array($_POST["idsElimina"]))) {
            //   echo "<script type='text/javascript'>alert('hola2');</script>";
            $arrayidEliminar = $_POST["idsElimina"];
            // echo "<script type='text/javascript'>alert('hola3');</script>";
            $array_num = count($arrayidEliminar);
            // echo "<script type='text/javascript'>alert('hola4');</script>";
            for ($i = 0; $i < $array_num; $i++) {
                // echo ' ' . $arrayidEliminar[$i];
                echo "<script type='text/javascript'>alert('$arrayidEliminar[$i]');</script>";
                $items->eliminarArticulo($arrayidEliminar[$i]);
            }
        }


        $data['listaArticulos'] = $items->listarArticulos();
        $this->view->show("vistaUsuarioEliminar.php", $data);
    }

    public function loginRol() {
        $this->view->show("loginUsuario.php");
    }

    public function registrarUsuarioRol() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $this->view->show("creadorUsuarioRol.php");


        $nombre = filter_input(INPUT_POST, 'nombre');
        $contra = filter_input(INPUT_POST, 'clave');
        $rol = filter_input(INPUT_POST, 'rol');


        if ($nombre != null && $contra != null && $rol != null) {
            $items->insertarUsuarioRol($nombre, $contra, $rol);
        }

        $message = 'datos incorrectos';
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    public function inicioSesionUsuarioRol() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
      $_SESSION['idUsuario'] = $_POST['username'];
        $usuarioCliente = $_POST['username'];
        $contra = $_POST['password'];
        // echo ''.$usuarioCliente.$contra;

        $resultado = $items->inicioSesionUsuarioRol($usuarioCliente, $contra);

        $long = count($resultado);
        for ($i = 0; $i < $long; $i++) {

            $_SESSION['tipoRol'] = $resultado[$i];



            if ($resultado!=null) {
                $message = 'Datos correctos';
                echo "<script type='text/javascript'>alert('$message');</script>";
                $this->view->show("vistaUsuario.php");
            } else  if(!$resultado){
                $message = 'Contraseña/Usuario incorrecto';
                echo "<script type='text/javascript'>alert('$message');</script>";

                $this->view->show("loginUsuario.php");
            }
        }
        
        if(!$resultado){}
    }

      public function inicioSesionCliente() {

        require 'model/ItemModel.php';
        $items = new ItemModel();
        $_SESSION['idCliente'] = $_POST['idCliente'];
        $idCliente = $_POST['idCliente'];
        $contra = $_POST['password'];
        $resultado = $items->inicioSesionCliente($idCliente, $contra);
        if ($resultado != null) {
            // echo "entro";
            $data['listaPromociones'] = $items->listarPromociones();
            $this->view->show("crearPromociones.php", $data);
        } else {
            $message = 'Contraseña/Usuario incorrecto';
            echo "<script type='text/javascript'>alert('$message');</script>";
            $this->view->show("loginCliente.php");
        }
    }
    
    public function vistaUsuario() {
        $this->view->show("vistaUsuario.php");
    }

    public function mostrarHistorialCompra() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $idCliente = $_SESSION['idCliente'];
        $data['listadoHistorial'] = $items->listarDesgloseCompra($idCliente);
        $this->view->show("vistaClienteDesgloseCompra.php", $data);
    }

    public function mostrarCompraTotalCliente() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $idCliente = $_SESSION['idCliente'];
        $data['listadoTotalCompra'] = $items->listarTotalCliente($idCliente);
        $this->view->show("vistaCompraTotalCliente.php", $data);
    }

    //


    public function listarDesgloseCompraClientes() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listarHistorialClientes'] = $items->listarDesgloseCompraClientes();
        $this->view->show("registro_actividad_clientes.php", $data);
    }

    public function historial_combos() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listaCombos'] = $items->listar_historial_combos();
        $this->view->show("registro_actividad_clientes_combos.php", $data);
    }

    public function listarComboCompradoDesglose() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $idCliente = $_SESSION['idCliente'];
        $data['listaPromociones'] = $items->listarComboCompradoDesglose($idCliente);
        $this->view->show("historialCompraCombos.php", $data);
    }

    public function crearUsuario_Admin() {
        $this->view->show("crearUsuarios_Admin.php");
    }

    public function vista_promociones() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listaPromociones'] = $items->listarPromociones();
        $this->view->show("crearPromociones.php", $data);
    }

    public function vista_creacionRoles() {
        $this->view->show("crearRoles.php");
    }

    public function crearRole() {
        require 'model/ItemModel.php';
        $items = new ItemModel();

        $idRol = $_POST['codigoRole'];
        $nombreRole = $_POST['nombreRol'];
        $idEmpleado = $_POST['empleado'];



        if ((!empty($_POST["framework"]) && is_array($_POST["framework"]))) {

            if (isset($_POST["framework"])) {
                $framework = '';
                foreach ($_POST["framework"] as $row) {
                    // $framework .= $row . ',';
                    // $framework .= $row . '  ';
                    $framework .= $row;
                }
                //      echo ''.$framework;
                if ($idRol != null && $nombreRole != null && $idEmpleado != null) { // $privilegios1[$i], $privilegios2[$i], $privilegios3[$i], 0);
                    $items->creacionRolesUsuario($idRol, $nombreRole, $idEmpleado, $framework);
                    $message = 'Rol creado  exitosamente';
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    $this->view->show("crearRoles.php");
                }
            }
        }
    }

}

// fin clase
?>