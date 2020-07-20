<?php
  require_once 'conexion.php';
  
  //listar los productos
  function listarClientes(){    
      $productos = array();
      $sql = "SELECT * FROM CLIENTES ORDER BY NOMBRE ASC";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);
            
      while($cliente = mysqli_fetch_assoc($resultado)){
          array_push($clientes, $cliente);
      } 
      
      return $clientes;
  }
  //registar un cliente
  function registrarClientes($nombre,$id,$mascota,$raza,$edad,$fecha,$observacion){
      
      $sql = "INSERT INTO CLIENTES VALUES('$nombre','$id','$mascota','$raza','$edad','$fecha','$observacion')";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);      
  }
   //eliminar un cliente 
  function eliminarClienteNombre($nombre){
      $sql = "DELETE FROM CLIENTES WHERE NOMBRE = '$nombre'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);   
  }
  
  //Buscar cliente por nombre
  function buscarClientes($nombre){
      $sql = "SELECT * FROM CLIENTES WHERE NOMBRE = '$nombre'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $cliente = mysqli_fetch_assoc($resultado);
       
       return $cliente;
  }

  //modificar un cliente
  function modificarClientes($nombre,$id,$mascota,$raza,$fecha,$observacion){
      $sql = "UPDATE CLIENTES SET ID='$id',MASCOTA='$mascota',RAZA='$raza',EDAD='$edad',FECHA'$fecha',OBSERVACION='$observacion'WHERENOMBRE='$nombre'";
      $sql = "UPDATE CLIENTES SET ID='$id',MASCOTA='$mascota',RAZA='$raza',EDAD='$edad',FECHA'$fecha',OBSERVACION='$observacion'WHERENOMBRE='$nombre'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);       
  }
