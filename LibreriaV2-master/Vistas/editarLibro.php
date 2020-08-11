<?php 
  require 'include/header.php';
  require dirname(__DIR__).'/LogicaNegocio/LibroServicios.php';
  
  if(isset($_GET['id'])){
      $id  = $_GET['id'];
      $servicios = new LibroServicios();
      $libro = $servicios->obtenerLibroById($id);
  }
?>
    <body>
    <section>
        <br>
        <h1>EDITAR LIBRO</h1>
        <form method="post" action="../Controladores/LibroController.php">		
            <input type="text" name="id" value="<?=$libro->getId();?>" readonly="true">
            <input type="text" name="nombre" value="<?=$libro->getNombre();?>">
            <input type="text" name="autor" value="<?=$libro->getAutor();?>">
            <input type="date" name="fecha" value="<?=$libro->getFecha();?>">                
            <input type="submit" name="accion" value="actualizar">
        </form>
    </section>
    </body>
</html>
