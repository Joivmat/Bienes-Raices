<?php

function conectarDB(): mysqli {
    $db = mysqli_connect('localhost', 'root', 'root','bienesraices_crud' );

    if(!$db){
        die('Error de conexión: ' . mysqli_connect_error());
    }
    
    return $db;
}