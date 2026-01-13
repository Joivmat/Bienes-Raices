<?php 
    require '../includes/config/database.php';
    $db = conectarDB();

    $query = "SELECT * FROM propiedades";

    $consulta = mysqli_query($db, $query);

    $resultado = $_GET['resultado'] ?? null;
    require '../includes/funciones.php';
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        <?php if ($resultado == 1): ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php elseif($resultado == 2):?>
            <p class="alerta exito">Anuncio actualizado correctamente</p> ?>
        <?php endif ?>
        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <table class="propiedades" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php while($propiedad = mysqli_fetch_assoc($consulta)): ?>
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla" alt="imgT abla"></td>
                    <td>$ <?php echo $propiedad['precio']; ?></td>
                    <td>
                        <a href="#" class="boton-rojo-block" >Eliminar</a>
                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'];?>" class="boton-azul-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>

        </table>            

    </main>

<?php
    incluirTemplate('footer');
?>