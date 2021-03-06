<?php 
   //Base de datos
   require '../../includes/config/database.php';
   $db  = conectarDB();
                 // var_dump($db);

    // Consultar para obtener los vendedores
    $consulta = "SELECT * FROM vendedores;";
    $resultado = mysqli_query($db,$consulta);


//Arreglo para mensajes con errores
$errores = [];

$titulo ='';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';
//Ejecutar el código después de que el usuario envia el formulario
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // echo "<pre>";
    //     var_dump($_POST);//contenido input
    // echo "</pre>";
    // exit;
    // echo "<pre>";
    //     var_dump($_FILES);//contenido archivos
    // echo "</pre>";

    $titulo = mysqli_real_escape_string( $db,  $_POST['titulo']);
    $precio = mysqli_real_escape_string( $db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string( $db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string( $db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string( $db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string( $db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string( $db, $_POST['vendedor']);
    $creado = date('Y/m/d');

    //ASIGNAR FILES HACIA UNA VARIABLE
    $imagen = $_FILES['imagen'];
    // var_dump($imagen['name']);
    // exit;
    
    if(!$titulo){
        $errores[] = "Debes indicar un titulo";
    }
    if(!$precio){
        $errores[] = "Debes indicar un precio";
    }
    if( strlen($descripcion) <50)  {
        $errores[] = "Debes indicar una descripcion de al menos 50 caracteres";
    }
    if(!$habitaciones){
        $errores[] = "Debes indicar el número de habitaciones";
    }
     if(!$wc){
        $errores[] = "Debes indicar el número de baños";
    }
    if(!$estacionamiento){
        $errores[] = "Debes indicar el número de estacionamientos";
    }
    if(!$vendedorId){
        $errores[] = "Debes seleccionar un vendedor";
    }
    if(!$imagen['name'] || $imagen['error']  ){
        $errores[] = "La imagen es obligatoria";
    }

    //Validar por tamaño (100 kb max)
    $medida = 1000*100;
    if($imagen['size'] > $medida){
        $errores[] = "La imagen es muy grande";
    }

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";
    //exit; Previene que se inserte en la bd y enseñe el error

    //REVISAR QUE EL ARREGLO DE ERRORES EST VACIO
    if(empty($errores)){

        //** SUBIDA DE ARCHIVOS**// */
        //Crear Carpeta
        $carpetaImagenes = '../../imagenes/';
        
        if(!is_dir($carpetaImagenes )){
            mkdir($carpetaImagenes);    
        }

        //generar un nombre unico
        $nombreImagen = md5( uniqid( rand(),true ) ).".jpg" ;
        //Subir la imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes.$nombreImagen);

          //Insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado,vendedorID) VALUES ('$titulo', '$precio', '$nombreImagen','$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId' )";
        //   echo     $query;
        $resultado = mysqli_query($db,  $query );
        if($resultado){
            // echo 'Insertado correctamente';
            // }else{
            //     echo 'error';
            // }
            //REDIRECCIONAR AL USURIO
            header('Location: /admin');
        }  
    }
}
   
   require '../../includes/funciones.php';
       // include 'includes/templates/header.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>                
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>" >
                
                <label for="precio">Precio:</label>                
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>" >
                
                <label for="imagen">Imagen:</label>                
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="descripcion">Descripción:</label>
                <textarea  id="descripcion" name="descripcion"> <?php echo $descripcion; ?> </textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>                
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ejm: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

                
                <label for="wc">Baños:</label>                
                <input type="number" id="wc" name="wc" placeholder="Ejm: 3" min="1" max="9" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamietento:</label>                
                <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ejm: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor" id="">
                    <option value="">-- Seleccione --</option>

                    <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>
                        <option  <?php echo $vendedorId === $vendedor['id'] ? 'selected' : '';  ?>  value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] .' '.  $vendedor['apellido']; ?> </option>
                    <?php endwhile; ?>

                </select>
            </fieldset>


            <input type="submit" class="boton boton-verde" value="Crear Propiedad">
        
        </form>
    </main>

 
    <?php
        incluirTemplate('footer');
     ?>