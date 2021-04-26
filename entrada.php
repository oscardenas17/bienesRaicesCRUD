<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>

    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="build/img/logo.svg" alt="Logotipo de bienes raices">
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="Icono menu responsive">
                </div>

                <div class="derecha">
                    <img src="build/img/dark-mode.svg" alt="" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
               
            </div>
            
        </div>
    </header>

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