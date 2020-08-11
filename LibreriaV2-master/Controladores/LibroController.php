<?php   
   require dirname(__DIR__).'/LogicaNegocio/LibroServicios.php';

  //Aquí entra el Registrar y el modificar
  if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            guardarLibro();
            break;  
        case 'actualizar':
            actualizarlibro();
            break;  
    }
  }

  //Aquí entra el Eliminar
  if(isset($_GET['accion'])){
    switch ($_GET['accion']) {
        case 'eliminar':
            eliminarLibro();            
            break;          
    }
  }  
  header("location:../index.php");
  
  function guardarLibro(){
      $nombre = $_POST['nombre'];
      $autor = $_POST['autor'];
      $fecha = $_POST['fecha'];
       
      $servicios = new LibroServicios();
      $servicios->agregarLibro($nombre,$autor,$fecha);
  }
  
  function eliminarLibro(){
      $id = $_GET['id'];
       
      $servicios = new LibroServicios();
      $servicios->eliminarLibro($id);
  }

  function actualizarlibro(){
      $id = $_POST['id'];
      $nombre = $_POST['nombre'];
      $autor = $_POST['autor'];
      $fecha = $_POST['fecha']; 
      $servicios = new LibroServicios();
      $servicios->modificarLibro($id, $nombre, $autor, $fecha);
  }  

?>