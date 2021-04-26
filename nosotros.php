<?php include 'includes/templates/header.php';?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores veniam sint repellat nulla sunt. Voluptatibus voluptas aut aspernatur doloribus esse atque perspiciatis sed iusto accusamus, vel dolore, enim et eos?</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores veniam sint repellat nulla sunt. Voluptatibus voluptas aut aspernatur doloribus esse atque perspiciatis sed iusto accusamus, vel dolore, enim et eos?</p>
            </div>

        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>bero voluptatum ducimus placeat beatae amet voluptate laborum. Dolore magni quos, dolores, eligendi porro aliquam repellendus error excepturi odit ipsam nihil!</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>bero voluptatum ducimus placeat beatae amet voluptate laborum. Dolore magni quos, dolores, eligendi porro aliquam repellendus error excepturi odit ipsam nihil!</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>bero voluptatum ducimus placeat beatae amet voluptate laborum. Dolore magni quos, dolores, eligendi porro aliquam repellendus error excepturi odit ipsam nihil!</p>
            </div>
        </div>
    </section>


    
    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos reservados &copy;</p>

    </footer>
  
    
    <script src="build/js/bundle.min.js"></script>
</body>
</html>