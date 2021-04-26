<?php include 'includes/templates/header.php';?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        <h2>Llena el formulario de contacto</h2>

        <form action="" class="formulario">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu nombre">

                <label for="email">Email</label>
                <input id="email" type="email" placeholder="Tu email">

                <label for="telefono">Teléfono</label>
                <input id="telefono" type="tel" placeholder="Tu teléfono">

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" ></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Vende o compra</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                </select>

                
                <label for="presupuesto">Presupuesto</label>
                <input id="presupuesto" type="number" placeholder="Tu presupuesto">

            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input type="radio" value="telefono" id="contactar-telefono" name="contacto">

                    <label for="contactar-email">E-mail</label>
                    <input type="radio" value="email" id="contactar-email" name="contacto">
                </div>

                <p>Si eligió teléfono, elija la hora para ser contactado</p>

                <label for="fecha">Fecha: </label>
                <input id="fecha" type="date">

                <label for="hora">Hora: </label>
                <input id="hora" type="time" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

    
    <?php include 'includes/templates/footer.php'?>