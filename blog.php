<?php 

    require 'includes/funciones.php';

    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog">

                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada1.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>12/04/2026</span>por: <span>Admin</span></p>
                        <p>
                            Consejos para construir una terraza en el techo de tu casa, con los mejores materiales y al mejor precio.
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada blog">

                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada2.php">
                        <h4>Construye una alberca para tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>16/04/2026</span>por: <span>Admin</span></p>
                        <p>
                            Aprende cómo construir una alberca en casa y transforma tu espacio exterior en un área de descanso y diversión. En este artículo te compartimos recomendaciones sobre diseño, materiales y distribución para aprovechar al máximo tu espacio y aumentar el valor de tu hogar.
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog3.webp" type="image/webp">
                        <source srcset="build/img/blog3.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog3.jpg" alt="texto entrada blog">

                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada3.php">
                        <h4>Guía para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>06/06/2026</span>por: <span>Admin</span></p>
                        <p>
                            Descubre cómo transformar tu hogar en un espacio funcional y acogedor. En esta guía encontrarás consejos prácticos para combinar colores, elegir muebles adecuados y aprovechar cada rincón, logrando un ambiente equilibrado, moderno y lleno de estilo.
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog4.webp" type="image/webp">
                        <source srcset="build/img/blog4.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog4.jpg" alt="texto entrada blog">

                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada4.php">
                        <h4>Guía para la decoración de tu habitación</h4>
                        <p class="informacion-meta">Escrito el: <span>27/12/2026</span>por: <span>Admin</span></p>
                        <p>
                            Aprende a crear una habitación cómoda y relajante que refleje tu personalidad. Te mostramos cómo seleccionar la paleta de colores ideal, organizar el mobiliario y añadir detalles decorativos que aporten armonía, confort y un descanso placentero.
                        </p>
                    </a>
                </div>
            </article>
    </main>

<?php
    incluirTemplate('footer');
?>