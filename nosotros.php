<?php 

    require 'includes/funciones.php';
    incluirTemplate('header','Nosotros');  
?>
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="img de nosotros">
                </picture>
            </div>
            

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum distinctio eligendi repellendus voluptas corporis laborum similique odit atque libero sapiente obcaecati dolorum eveniet architecto totam perferendis reiciendis inventore, harum cumque velit quis neque impedit consectetur odit soluta dolore asperiores quisquam quos aliquid ad aut esse minus totam, debitis magni aperiam ipsam! Obcaecati debitis ullam earum ab inventore odit corporis libero quasi quibusdam! Nobis tempora veritatis odit obcaecati quod quo ab expedita alias. eum eaque optio alias accusamus repudiandae soluta animi labore maxime est consectetur a dignissimos suscipit minima impedit minus esse. Magni?
                </p>
            
            </div>
        </div>
    </main>



    <section class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias exercitationem delectus alias maiores quia sint, fugit voluptates dolor. Inventore cum quibusdam ratione quo quidem recusandae, molestiae nisi necessitatibus quis harum.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias exercitationem delectus alias maiores quia sint, fugit voluptates dolor. Inventore cum quibusdam ratione quo quidem recusandae, molestiae nisi necessitatibus quis harum.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias exercitationem delectus alias maiores quia sint, fugit voluptates dolor. Inventore cum quibusdam ratione quo quidem recusandae, molestiae nisi necessitatibus quis harum.</p>
            </div>
        </div>
    </section>

    </main>

<?php
    incluirTemplate('footer');
?>