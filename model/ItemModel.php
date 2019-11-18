<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemModel
 *
 * @author Karol
 */
require 'libs/SPDO.php';
require 'model/Cliente.php';
class ItemModel {
    protected $db;
   
    
    public function __construct() {

        $this->db = SPDO::singleton();
    }
    
//    public function cantidad_compra_directa_actualizar($idP, $cantidadP){
//        $consulta = $this->db->prepare("call sp_cantidad_compra_directa('32','10')"); //,'$tipo2','$tipo3','$tipo4')");
//        $consulta->execute();
//        $resultado = $consulta->fetchAll();
//        $consulta->CloseCursor();
//        return $resultado;       
//        
//    }
    
    
    
    
     public function comprar_combos($idPromo, $cantidad, $idCliente) {
        $consulta = $this->db->prepare("call sp_comprar_compos('$idPromo','$cantidad','$idCliente')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

    public function registrarClientes($nombre,$usuario,$contra,$correo,$idCliente){
      $consulta = $this->db->prepare("call sp_registrar_cliente('$nombre','$usuario','$contra','$correo','$idCliente')"); //,'$tipo2','$tipo3','$tipo4')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;    
        
    }
    
    
     public function listarPromociones() {
        $consulta = $this->db->prepare("call sp_listar_combo()"); //,'$tipo2','$tipo3','$tipo4')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
      public function insertar_combo($cod, $Imagen, $precio, $titulo,$cantidad) {
       $consulta = $this->db->prepare("call sp_insertar_combo('$cod','$Imagen','$precio','$titulo','$cantidad')"); //,'$tipo2','$tipo3','$tipo4')");
           
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

    
    
    public function creacionRolesUsuario($cod,$nombre,$usuario,$tipo1){//,$tipo2,$tipo3,$tipo4) {
        $consulta = $this->db->prepare("call sp_crearRoles2('$cod','$nombre','$usuario','$tipo1')");//,'$tipo2','$tipo3','$tipo4')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

    public function listarArticulos() {
        $consulta = $this->db->prepare('call sp_mis_articulos_listado()');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

        public function agregar_Carrito($codP,$codC) {
        $consulta = $this->db->prepare("call sp_agregar_carrito('$codP','$codC')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;   
        
        
     
        
        
    }
        public function listarArticulosAgregadosCarrito($idCliente) {
        $consulta = $this->db->prepare("call sp_mi_carrito_listar('$idCliente')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    

 public function mis_articulos_comprados($cantidad,$idP, $idC) {
     //$consulta = $this->db->prepare("call sp_mis_articulos_comprados(55 ,1,1)");
       $consulta = $this->db->prepare("call sp_mis_articulos_comprados('$cantidad','$idP' ,'$idC')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }


    
       public function realizar_pago($numeroTarjeta, $codigoPostal, $direccionPostal, $descripcion, $idcliente) {                              
      //  $consulta = $this->db->prepare("call sp_realizar_pago_carrito(123,'12','JV','EW','1')");
        
        $consulta = $this->db->prepare("call sp_realizar_pago_carrito($numeroTarjeta','$codigoPostal','$direccionPostal','$descripcion','$idcliente')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }


    
        public function eliminar_articulo_agregado_al_carrito($idArt) {
        $consulta = $this->db->prepare("call sp_eliminar_articulo_agregado_al_carrito('$idArt')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    

  public function inicioSesionCliente($nombre, $contra) {
        $consulta = $this->db->prepare("call sp_inicioCliente('$nombre','$contra')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
    public function inicioSesionAdmin($nombre, $contra) {
        $consulta = $this->db->prepare("call sp_inicioAdmin('$nombre','$contra')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
    //////////////////////ROLES///////////////////////////////////////
    public function insertar($codigo, $nombre, $categoria, $precio, $cantidad) {
        $consulta = $this->db->prepare("call sp_insertar('$codigo','$nombre','$categoria','$precio','$cantidad')");
        // $consulta = $this->db->prepare("call sp_insertar(4,'ARROZ','FIDEOS',100,100)");
        //call sp_insertar(11,'ARROZ','fideos',23,100)
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
    
    
    public function eliminarArticulo($codigo) {
        $consulta = $this->db->prepare("call sp_eliminar('$codigo')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
    
    /*Cmabiar*/
      public function actualizar($codigo, $nombre, $precio,$categoria ,$cantidad) {
        $consulta = $this->db->prepare("call sp_modificar('$codigo','$nombre','$precio','$categoria','$cantidad')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

// fin actualizar

    public function buscarActualizar($codigo) {
        $consulta = $this->db->prepare('call sp_validarCodigo("' . $codigo . '")');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
     public function insertarUsuario($nombreUsuario, $nombre, $contra,$correo) {
        $consulta = $this->db->prepare("call sp_insertarUsuario('$nombreUsuario','$nombre','$contra','$correo')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
     public function inicioSesionUsuarioRol($nombre, $contra) {
        $consulta = $this->db->prepare("call sp_iniUsuario2('$nombre','$contra')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

    
    /*Obtengo el desglose de las compra*/
    public function listarDesgloseCompra($idCliente) {
        $consulta = $this->db->prepare("call sp_registro_de_actividad_cliente('$idCliente')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
    
    /*Obtengo el total de la compra*/
    public function listarTotalCliente($idCliente){
         $consulta = $this->db->prepare("call sp_cantidadTotalCompraCliente('$idCliente')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;  
        
        
    }
    /*Muestra el desglose de todos los clientes*/
       public function listarDesgloseCompraClientes() {
        $consulta = $this->db->prepare("call registro_actividad_clientes()");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
    
     /*Muetras el desglose de los compros comprados*/
    public function listarComboCompradoDesglose($id) {
        $consulta = $this->db->prepare("call sp_registro_actividad_clientes_combos('$id')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

    
    
       public function listar_historial_combos() {
        $consulta = $this->db->prepare("call sp_ver_historial_combos()");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

       public function listar_compra_total_combos($id) {
        $consulta = $this->db->prepare("call sp_compra_total_combos('$id')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

    
    
    
      public function mostrarRoles() {
        $consulta = $this->db->prepare("call sp_mostrat_role_vista()");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
        public function mostrarUsuarios() {
        $consulta = $this->db->prepare("call sp_mostrar_usuarios()");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
    public function eliminarUsuario($id){
       $consulta = $this->db->prepare("call sp_eliminar_usuario('$id')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;  
        
    }
    
    public  function eliminarRol($id){
           $consulta = $this->db->prepare("call sp_eliminar_rol('$id')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;      
        
    }
    
    
    
      public  function cantidadProductosMenores(){
           $consulta = $this->db->prepare("call sp_cantidad_productos()");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;      
        
    }
    
}

// fin clase
