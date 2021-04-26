<?php 
    require 'includes/funciones.php';
   
    // include 'includes/templates/header.php';
    incluirTemplate('header');


?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

      

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span> 20/10/2021 </span> por: <span> Admin</span></p>

        <div class="resumen propiedad">
           

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa in esse odit debitis dignissimos unde, eligendi ab minus consectetur. Quis ipsam voluptatum iste illum quod corrupti expedita veniam ea nihil.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem illo sit facere esse! Aliquam ratione perferendis dignissimos tempore hic assumenda repellendus unde fuga, esse officia ut. Minus tempora sequi quia.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores aliquid asperiores voluptate commodi eligendi! Doloribus, autem dicta rem, sequi alias rerum odio sint pariatur nulla blanditiis molestias laudantium, officia minus.
            </p>

        </div>
    </main>

    
    
    <?php
        incluirTemplate('footer');
     ?>