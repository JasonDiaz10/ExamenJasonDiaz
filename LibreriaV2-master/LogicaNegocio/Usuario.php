<?php

class Usuario {
   
    private $id;
    private $nombre;
    private $direccion;
    private $telefono;
    private $password;
    private $correo;
    
    public function __construct($id,$nombre,$direccion,$telefono,$password,$correo){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->password = $password;
        $this->correo = $correo;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getPassword() {
        return $this->password;
    }

    function getCorreo() {
        return $this->correo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }
}
