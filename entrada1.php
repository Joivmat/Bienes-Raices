<?php 

    require 'includes/funciones.php';
    incluirTemplate('header','Blog-1');  
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Terraza en el techo de tu casa</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada.jpg" alt="img de la propiedad">
        </picture>
        <p class="informacion-meta">Escrito el: <span>12/04/2026</span>por: <span>Admin</span></p>

        <div class="resumen-propiedad" >
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, maiores impedit in ipsa non optio quod quo pariatur sapiente suscipit eligendi aspernatur fuga. Repudiandae quo fugiat repellat odio maxime modi, explicabo consequatur odit voluptates reiciendis aspernatur recusandae beatae blanditiis! Sit impedit veniam corrupti dolore, alias voluptas non facere velit architecto vel totam dolores omnis atque illo saepe maiores fuga quo, laudantium laboriosam? Porro eligendi odit corporis, ex aspernatur obcaecati aliquid.
            </p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>