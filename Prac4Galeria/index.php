<?php

    require('funciones.php');

    # -----------------------------------------------------------------------------------------------
    #                                  Para realizar la paginacion
    # -----------------------------------------------------------------------------------------------

    #Número de paginas por pagina
    $fotos_por_pagina = 8;

    #Obtiene el numero de pagina donde nos encontramos
    $pagina_actual = ( isset( $_GET['p']) ? (int)$_GET['p'] : 1 );

    #Si la pagina es 1 $fotos_por_pagina = 0 de lo contrario inicio = 2 * 8 = 16 - 8  = 8
    $inicio = ( $pagina_actual > 1 ) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

    #Llama a la funcion de conexion 
    $conexion = conexion('dbPrueba', 'root', '');

    #Si no hay conexion mata la ejecucion de la pagina
    if(!$conexion){
        die();
    }

    #SQL_CALC_FOUND_ROWS: calcula el numero de fotos en la BD 
    $statement = $conexion -> prepare(
        "SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina"
    );

    $statement -> execute();
    $fotos = $statement -> fetchAll();

    #Si no hay fotos, reedirigira a la pagina index.php
    if(!$fotos){
        header('Location: index.php');
    }

    $statement = $conexion -> prepare(
        "SELECT FOUND_ROWS() as total_filas"
    );

    $statement -> execute();
    $total_post = $statement -> fetch()['total_filas'];

    // La funcion Ceil redondea hacia arriba el resultado de una operacion
    $total_paginas = ceil($total_post / $fotos_por_pagina);
    
    # echo $total_paginas . '</br>';
    # echo $total_post . '</br>';
    require 'views/index.view.php';

?>
