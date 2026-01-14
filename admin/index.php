<?php 
    require '../includes/config/database.php';
    $db = conectarDB();

    $query = "SELECT * FROM propiedades";

    $consulta = mysqli_query($db, $query);

    $resultado = $_GET['resultado'] ?? null;

    require '../includes/funciones.php';
    incluirTemplate('header','Administrador'); 
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        <?php if ($resultado == 1): ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php elseif($resultado == 2):?>
            <p class="alerta exito">Anuncio actualizado correctamente</p>
        <?php elseif($resultado == 3):?>
            <p class="alerta exito">Anuncio eliminado correctamente</p>
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
                    <td>$ <?php echo number_format($propiedad['precio'],2 , ".", ","); ?></td>
                    <td>
                        
                        <form method="POST" action="/admin/propiedades/eliminar.php" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                            <button 
                            type="submit" 
                            onclick="return confirm('¿Seguro que deseas eliminar esta propiedad?');" 
                            class="boton-rojo-block">
                                Eliminar
                            </button>
                        </form>

                        <form method="GET" action="/admin/propiedades/actualizar.php" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                            <button type="submit" class="boton-azul-block">
                                Actualizar
                            </button>
                        </form>
                    </td>

                </tr>
                <?php endwhile; ?>
            </tbody>

        </table>            

    </main>

<?php
    incluirTemplate('footer');
?>