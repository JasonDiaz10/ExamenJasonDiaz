<?php 
require dirname(__DIR__).'/BaseDatos/ConexionBD.php';
require dirname(__DIR__).'/LogicaNegocio/Libro.php';

class LibroServicios {
    
    private $db;  
    
    function __construct() {
        $this->db = new ConexionBD();
    }
  
    function agregarLibro($nombre, $autor, $fecha) {
        $this->db->getConeccion();
        $sql = "INSERT INTO LIBRO(nombre,autor,fecha) VALUES(?,?,?)";
        $paramType = 'sss';
        $paramValue = array($nombre, $autor,$fecha);
        
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }
    
    function modificarLibro($id,$nombre, $autor, $fecha) {
        $this->db->getConeccion();
        $sql = "UPDATE LIBRO SET NOMBRE = ?,AUTOR= ?,FECHA = ? WHERE ID = ?";
        $paramType = "sssi";
        $paramValue = array($nombre, $autor, $fecha,$id);
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }
    
    function eliminarLibro($id) {
        $this->db->getConeccion();
        $sql = "DELETE FROM LIBRO WHERE id = ?";
        $paramType = "i";
        $paramValue = array($id);
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }    
   
    function obtenerLibros() {
        $this->db->getConeccion();        
        $sql = "SELECT * FROM LIBRO ORDER BY id";
        $registros = $this->db->executeQueryReturnData($sql);
        $libros =array();
        
        foreach ($registros as $posicion => $row){
            $libro = new Libro($row['id'],$row['nombre'],$row['autor'],$row['fecha']);
            array_push($libros, $libro);
        }
        $this->db->cerrarConeccion();        
        return $libros;
    } 
    
    function obtenerLibroById($id) {
        $this->db->getConeccion();
        $sql = "SELECT * FROM LIBRO WHERE ID = $id";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        $libro = new Libro($registros[0]['id'],$registros[0]['nombre'],$registros[0]['autor'],$registros[0]['fecha']);
        return $libro;
    }    
}

?>