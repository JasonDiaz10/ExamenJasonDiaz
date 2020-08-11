<?php

class Libro {
   
    private $id;
    private $nombre;
    private $autor;
    private $fecha;
    
    public function __construct($id,$nombre,$autor,$fecha){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->autor = $autor;
        $this->fecha = $fecha;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getAutor() {
        return $this->autor;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }


}

?>