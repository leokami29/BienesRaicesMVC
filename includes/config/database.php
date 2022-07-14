<?php 

function conectarDB () :mysqli {
    $db = new mysqli('localhost', 'root','123456', 'bienes_raises');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    }
    return $db;
}