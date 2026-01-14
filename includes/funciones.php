<?php

require 'app.php';

function incluirTemplate( string $nombre, string $titulo= null, bool $inicio = false) {
    include TEMPLATES_URL . "/{$nombre}.php";
}