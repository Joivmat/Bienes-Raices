<?php
function conectarDB() {
    $db = mysqli_connect(
        'localhost',
        'usuario',
        'password',
        'basededatos'
    );

    if (!$db) {
        echo "Error de conexión a la base de datos";
        exit;
    }

    return $db;
}
