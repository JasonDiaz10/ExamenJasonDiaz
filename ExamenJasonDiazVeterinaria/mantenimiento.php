<?php  
  require_once './basedatos/clientesConsulta.php';   

  //Aquí entra el Registrar y el modificar
  if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            guardarCliente();
            header("location:index.php");
            break;
        case 'actualizar':
            actualizarCliente();
            header("location:index.php");
            break;            
    }
  }
  
  // Aqui entra el Eliminar
  if(isset($_GET['accion'])){
    switch ($_GET['accion']) {
        case 'eliminar':
            eliminarClienteNombre();
            header("location:index.php");
            break;       
    }
  }  
  function guardarCliente(){
      $nombre = $_POST['nombre'];
      $id = $_POST['id'];
      $mascota = $_POST['mascota'];
      $raza = $_POST['raza'];
      $edad = $_POST['edad'];
      $fecha = $_POST['fecha'];
      $observacion = $_POST['observacion'];
      registrarClientes($nombre,$id,$mascota,$raza,$fecha,$observacion);
  }
  
  function eliminarCliente(){
      $nombre = $_GET['nombre'];
      eliminarProductoNombre($nombre);
  }
  
  function actualizarCliente(){
      $nombre = $_POST['nombre'];
      $id = $_POST['id'];
      $mascota = $_POST['mascota'];
      $raza = $_POST['raza'];
      $edad = $_POST['edad'];
      $fecha = $_POST['fecha'];
      $observacion = $_POST['observacion'];
      modificarClientes($nombre,$id,$mascota,$raza,$fecha,$observacion);   
  }
  
?>
