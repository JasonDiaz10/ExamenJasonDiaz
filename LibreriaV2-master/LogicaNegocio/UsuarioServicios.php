<?php

require dirname(__DIR__).'/BaseDatos/ConexionBD.php';
require dirname(__DIR__).'/LogicaNegocio/Usuario.php';

class UsuarioServicios {
    
    private $db;  
    
    function __construct() {
        $this->db = new ConexionBD();
    }

    //Buscar usuario por correo y password
    function buscarUsuario($correo,$password){
        $this->db->getConeccion();
        $sql = "SELECT * FROM USUARIOS WHERE CORREO='$correo' AND PASSWORD='$password'";
        $registros = $this->db->executeQueryReturnData($sql);        
        $this->db->cerrarConeccion();      
        if($registros != null){
           $usuario = new Usuario($registros[0]['id'],$registros[0]['nombre'],$registros[0]['direccion'],$registros[0]['telefono'],$registros[0]['password'],$registros[0]['correo']);
        }
       return $usuario;
    }     
}
