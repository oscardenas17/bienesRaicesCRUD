<?php 
   //Base de datos
   require '../../includes/config/database.php';
   $db  = conectarDB();
//    var_dump($db);


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
    //     var_dump($_POST);
    // echo "</pre>";
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedor'];
    
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
 

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";
    //exit; Previene que se inserte en la bd y enseñe el error

    //REVISAR QUE EL ARREGLO DE ERRORES EST VACIO
    if(empty($errores)){
          //Insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorID) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId' );";
        //  echo     $query;
        $resultado = mysqli_query($db,  $query );
        if($resultado){
            echo 'Insertado correctamente';
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

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>                
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>" >
                
                <label for="precio">Precio:</label>                
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>" >
                
                <label for="imagen">Imagen:</label>                
                <input type="file" id="imagen" accept="image/jpeg, image/png" >

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