<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?? 'Bienes Raíces'; ?> – Bienes Raíces</title>
    <link rel="icon" type="image/png" href="../../src/img/favicon.png">
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="logo">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <nav class="navegacion">
                    <a href="/nosotros.php">Nosotros</a>
                    <a href="/anuncios.php">Anuncios</a>
                    <a href="/blog.php">Blog</a>
                    <a href="/contacto.php">Contacto</a>
                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] === true): ?>
                         <a class="boton boton-rojo-block" href="/includes/config/logout.php">Cerrar sesión</a>
                    <?php endif; ?>

                </nav>


            </div> <!--.barra-->
            <?php echo $inicio ? '<h1>Venta de Casas y Departamentos</h1>' : '' ?>
            

        </div>
    </header>