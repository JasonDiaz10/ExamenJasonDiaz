<?php 
    require_once './Vistas/include/header.php';
    require_once __DIR__.'/LogicaNegocio/LibroServicios.php';
    $servicios = new LibroServicios();
    $libros = $servicios->obtenerLibros();     
?>
    <body>
        <nav>
            <ul>
                <li><a href="Vistas/registrarLibro.php">Registrar</a></li>
                <li><a href="Vistas/cerrarSesion.php">Salir</a></li>
            </ul>
        </nav> 
        <section>
            <br>
            <h1>Lista de Productos</h1>
            <table id="t1" border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Autor</th>
                        <th>Fecha</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if(count($libros) >0):  
                        foreach ($libros as $posicion => $libro):  ?>
                            <tr>
                                <td><?=$libro->getId();?></td>
                                <td><?=$libro->getNombre();?></td>
                                <td><?=$libro->getAutor();?></td>
                                <td><?=$libro->getFecha();?></td>
                                <td><a href="Vistas/editarLibro.php?id=<?=$libro->getId();?>">Editar</a></td>
                                <td><a href="Controladores/libroController.php?accion=eliminar&id=<?=$libro->getId();?>">Borrar</a></td>
                            </tr>
                <?php
                       endforeach;
                    endif;
                ?>
                </tbody>
            </table>
        </section>                
    </body>
</html>
