<?php

    require 'funciones.php';

    # Establece la conexion a la base de datos
    $conexion = conexion('dbPrueba', 'root', '');

    # Si la conexion no es correta
    if(!$conexion){
        die();
    }

    # id = al numero de foto al que se accede en el index
    $id = isset($_GET['id']) ? (int)$_GET['id'] : false;

    # si id no tiene algun valor redirigira a index.php
    if(!$id){
        header('Location: index.php');
    }

    $statement = $conexion -> prepare('SELECT * FROM fotos WHERE id_foto = :id');
    $statement -> execute(array(':id' => $id));

    $foto = $statement -> fetch();

    if(!$foto){
        header('Loction: index.php');
    }

    require 'views/foto.view.php';
    
    
?>