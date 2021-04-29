<?php 
    require '../../includes/funciones.php';
   
    // include 'includes/templates/header.php';
    incluirTemplate('header');


?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <form action="" class="formulario">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>                
                <input type="text" id="titulo" placeholder="Titulo Propiedad">
                
                <label for="precio">Precio:</label>                
                <input type="number" id="precio" placeholder="Precio Propiedad">
                
                <label for="imagen">Imagen:</label>                
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción:</label>
                <textarea name="" id="descripcion" ></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habiraciones:</label>                
                <input type="number" id="habitaciones" placeholder="Ejm: 3" min="1" max="9">

                
                <label for="wc">Baños:</label>                
                <input type="number" id="wc" placeholder="Ejm: 3" min="1" max="9">

                <label for="estacionamiento">Estacionamietento:</label>                
                <input type="number" id="estacionamiento" placeholder="Ejm: 3" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="" id="">
                    <option value="1">Juan</option>
                    <option value="2">karen</option>
                </select>
            </fieldset>


            <input type="submit" class="boton boton-verde" value="Crear Propiedad">
        
        </form>
    </main>

 
    <?php
        incluirTemplate('footer');
     ?>