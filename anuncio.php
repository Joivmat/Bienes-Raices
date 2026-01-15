<?php 
    require 'includes/config/database.php';

    // Verificar id
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if(!$id){
        header('Location: /anuncios.php');
        exit;
    }
    // Importar db
    $db = conectarDB();

    // Consulta
    $stmt = $db->prepare("SELECT * FROM propiedades WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $propiedad = $resultado->fetch_assoc();

    if (!$propiedad) {
        header('Location: /anuncios.php');
        exit;
    }

    require 'includes/funciones.php';   
    incluirTemplate('header','Anuncio'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo htmlspecialchars($propiedad['titulo']); ?>
</h1>

            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen'];?>" alt="img de la propiedad">

        <div class="resumen-propiedad" >
            <p class="precio">$ <?php echo number_format($propiedad['precio'],2,".", ",");?></p>
            <ul class="iconos-caracteristicas"> 
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg"alt="icono wc">
                    <p><?php echo $propiedad['wc'];?></p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg"alt="icono estacionamiento">
                    <p><?php echo $propiedad['estacionamiento'];?></p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg"alt="icono dormitorio">
                    <p><?php echo $propiedad['habitaciones'];?></p>
                </li>
            </ul> 

            <p><?php echo nl2br(htmlspecialchars($propiedad['descripcion'])); ?>
</p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>