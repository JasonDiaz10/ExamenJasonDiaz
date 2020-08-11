<?php //require_once './baseDatos/productoConsultas.php'; 
 session_start();
   if(!isset($_SESSION['usuarioLogueado'])){
       header('location:login.php');
   }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Tanuki</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        <nav>
            <ul>
            <?php if(isset($_SESSION['usuarioLogueado'])):
               $array=$_SESSION['usuarioLogueado'];
               
            if($array["Rol"]=="administrador")   
            {
            ?>
                <li><a href="registrarusuario.php">Registrar Usuario</a></li>
                <li><a href="#">Activar/Desactivar Usuario</a></li>
                <li><a href="#">Registrar Cita</a></li>
                <li><a href="#">Modificar Cita</a></li>
                <li><a href="#">Eliminar Cita</a></li>
                <li><a href="#">Listar Citas</a></li>
                <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
                
                 <?php
            } else { 
                ?>
                <li><a href="#">Registrar Cita</a></li>
                <li><a href="#">Modificar Cita</a></li>
                <li><a href="#">Eliminar Cita</a></li>
                <li><a href="#">Listar Citas</a></li>
               
                
                <?php
            }
                ?>
                
               
                
            <?php endif;?>
            </ul>
        </nav>