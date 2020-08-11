<?php require 'include/header.php';?>
    <body>
    <section>
        <br>
        <h1>REGISTRAR LIBRO</h1>
        <form method="post" action="../Controladores/LibroController.php">		
            <input type="text" placeholder="Nombre" name="nombre" required>
            <input type="text" placeholder="Autor"  name="autor" required>
            <input type="date" placeholder="Fecha" name="fecha" required>                
            <input type="submit" name="accion" value="registrar">
        </form>
    </section>
    </body>
</html>
