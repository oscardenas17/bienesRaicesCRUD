<?php

//REQUIRE PARA LLAMAR LA RUTA A TEMPLATES
require 'app.php';

function incluirTemplate( string $nombre, bool $inicio = false){
    include TEMPLATES_URL . "/${nombre}.php";
} 