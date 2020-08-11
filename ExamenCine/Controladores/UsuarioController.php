<?php

  require dirname(__DIR__).'/LogicaNegocio/UsuarioServicios.php';
  session_start();        
  
  if(isset($_POST['accion'])){
      switch ($_POST['accion']){          
          case 'Ingresar':
              $usuario = validarUsuario();
              if(!empty($usuario)){
                  $_SESSION['usuarioLogueado'] = $usuario;
                  header('location:../index.php');
              }else{
                  header('location:../view/login.php');
              }
          break;          
      }
  }

  
  function validarUsuario(){
      
    $correo = $_POST['correo']; 
    $password = $_POST['password'];
    
    $servicios = new UsuarioServicios();
    $usuario = $servicios->buscarUsuario($correo, $password);

    return $usuario;
  }

?>