<?php 

    require 'includes/funciones.php';
    incluirTemplate('header','Blog-3'); 
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoracion de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada3.jpg" alt="img de la propiedad">
        </picture>
        <p class="informacion-meta">Escrito el: <span>06/06/2026</span>por: <span>Admin</span></p>

        <div class="resumen-propiedad" >
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo placeat debitis tenetur fugiat soluta? Ad expedita sed obcaecati minima dolor mollitia, sapiente eaque? Doloribus exercitationem amet dicta, similique, earum hic eos facere cupiditate distinctio placeat sunt excepturi. Animi ipsa qui, aliquam voluptas dolore excepturi, distinctio soluta debitis neque necessitatibus facilis tenetur dolores architecto eaque. Quas quia quaerat sequi. Explicabo corporis iusto quod quasi reiciendis, consequatur beatae harum quis placeat totam accusantium dolorum obcaecati nobis ullam est hic, distinctio provident optio cumque eos voluptas laborum vero consectetur fugiat. Voluptates mollitia, delectus obcaecati eum nemo tempora a optio rerum facere dolor recusandae iusto excepturi laborum quia aliquid ex magni consequatur explicabo! Quibusdam commodi quisquam repellendus perspiciatis sit facilis voluptates nostrum eligendi, exercitationem atque sed earum amet labore beatae reprehenderit consequatur perferendis id laboriosam excepturi! Saepe repudiandae eos cupiditate repellendus aspernatur. Id pariatur harum et, cupiditate beatae placeat repudiandae veniam nobis hic aspernatur.
            </p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>