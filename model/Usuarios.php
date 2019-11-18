<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description de Usuarios
 *
 * @author mgkar
 */
class Usuarios {
    
       private $nombre;
       private $contrasena;
       private $edad;
       private $usuario;
       private $genero;
       
       
       
       public function __construct() {
          $a= func_get_args();
          $n= func_num_args();
          if(method_exists($this, $f='__construct'.$n)){
              call_user_func_array(array($this,$f), $a);
          }
      }

    public function __construct2($nombre, $contrasena, $edad, $usuario, $genero) {
        $this->nombre = $nombre;
        $this->contrasena = $contrasena;
        $this->edad = $edad;
        $this->usuario = $usuario;
        $this->genero = $genero;
    }

// constructor2

    function getUsuario() {
           return $this->usuario;
       }

       function setUsuario($usuario) {
           $this->usuario = $usuario;
       }

              
       function getNombre() {
           return $this->nombre;
       }

       function getContrasena() {
           return $this->contrasena;
       }

       function getEdad() {
           return $this->edad;
       }

       function getGenero() {
           return $this->genero;
       }

       function setNombre($nombre) {
           $this->nombre = $nombre;
       }

       function setContrasena($contrasena) {
           $this->contrasena = $contrasena;
       }

       function setEdad($edad) {
           $this->edad = $edad;
       }

       function setGenero($genero) {
           $this->genero = $genero;
       }

 public function __toString(){
           return "Nombre: ".$this->nombre . " Edad: ".$this->edad." , Género".$this->genero;
       } 
}

