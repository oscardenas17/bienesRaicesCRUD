
<?php 
    require 'includes/funciones.php';
   
    // include 'includes/templates/header.php';
    incluirTemplate('header');


?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio"> $300.000.000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img src="build/img/icono_wc.svg" alt="icono wc" loading="lazy" class="icono">
                    <p>3</p>
                </li>
           

                <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy" class="icono">
                    <p>3</p>
                </li>
                

                <li>
                    <img src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy" class="icono">
                    <p>4</p>
                </li>
              
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa in esse odit debitis dignissimos unde, eligendi ab minus consectetur. Quis ipsam voluptatum iste illum quod corrupti expedita veniam ea nihil.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem illo sit facere esse! Aliquam ratione perferendis dignissimos tempore hic assumenda repellendus unde fuga, esse officia ut. Minus tempora sequi quia.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores aliquid asperiores voluptate commodi eligendi! Doloribus, autem dicta rem, sequi alias rerum odio sint pariatur nulla blanditiis molestias laudantium, officia minus.
            </p>

        </div>
    </main>

    
    <?php
        incluirTemplate('footer');
     ?>