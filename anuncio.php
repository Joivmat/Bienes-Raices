<?php 

    require 'includes/funciones.php';

    incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada.jpg" alt="img de la propiedad">
        </picture>

        <div class="resumen-propiedad" >
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas"> 
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg"alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg"alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg"alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul> 

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, maiores impedit in ipsa non optio quod quo pariatur sapiente suscipit eligendi aspernatur fuga. Repudiandae quo fugiat repellat odio maxime modi, explicabo consequatur odit voluptates reiciendis aspernatur recusandae beatae blanditiis! Sit impedit veniam corrupti dolore, alias voluptas non facere velit architecto vel totam dolores omnis atque illo saepe maiores fuga quo, laudantium laboriosam? Porro eligendi odit corporis, ex aspernatur obcaecati aliquid.
            </p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>