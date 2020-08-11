<?php

  require_once 'conexion.php';
 
    //Buscar usuario por correo y password
  function buscarUsuario($user,$clave){
      
      $sql = "SELECT * FROM USUARIOS WHERE USUARIO='$user' AND CLAVE='$clave'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $usuario = mysqli_fetch_assoc($resultado);
       
       return $usuario;
  } 
  //Registro
    function registrarUsuario($cedula,$nombre,$telefono,$correo,$direccion,$estado,$rol,$usuario,$clave){
      
      $sql = "INSERT INTO  USUARIOS(Cedula,Nombre,Telefono,Correo,Direccion,Estado,Rol,Usuario,Clave) VALUES('$cedula','$nombre','$telefono','$correo','$direccion','$estado','$rol','$usuario','$clave')";
      if(mysqli_query($GLOBALS['conexion'], $sql))
      {
          echo 1;
          
      }else
      { echo $cedula+$nombre;
           echo 2;
      }
           
  }
  
?>