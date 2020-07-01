<?php
    # Guarda la configuracion del sitio web
    define ('Ruta', 'http://localhost:8080/phpCurso/Prac5Blog/');

    $bd_config = array(
        'basededatos' => 'dbPrueba',
        'usuario' => 'root',
        'pass' => ''
    );

    $blog_config = array(
        'post_por_pagina' => 2,
        'carpeta_imagenes' => 'img/'
    );

    $blog_admin = array(
        'usuario' => 'carlos',
        'password' => '123'
    );

?>