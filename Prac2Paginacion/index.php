<?php

    #----------------------------------------------------------------------------------------------------------
    #                                   CONEXION A LA BASE DE DATOS 
    #----------------------------------------------------------------------------------------------------------
    
    try { // Intenta hacer la conexion

        // conexion a la DB
        $conexion = new PDO('mysql:host=localhost;dbname=dbPrueba', 'root', ''); 
        
    } catch (PDOException $e) { // si no puede hacer la conexion

        //Muestra el error de la DB
        echo "Error:" . $e -> getMessage(); 
        die();

    }

    #----------------------------------------------------------------------------------------------------------
    #                                 TRAE LOS DATOS  
    #----------------------------------------------------------------------------------------------------------

    $postPorPagina = 5;
    
    // pagina = si hay algo en GET[pagina] ?  convierte 'pagina a int y guarda' : si no es pagina = 1 
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    
    // Operacion para clacular el numero de registros por pagina
    $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

    // Prepara la query para ser ejecutada
    // SQL_CALC_FOUND_ROWS nos ayuda a contar los articulos 
    $articulo = $conexion -> prepare(
        "SELECT SQL_CALC_FOUND_ROWS * FROM articulosElectronicos LIMIT $inicio, $postPorPagina"
    );

    // Ejecuta la sentencia SQL de articulo
    $articulo -> execute();
    $articulo = $articulo -> fetchAll();

    // Si no hay fotos, reedirigara a la pagina
    if(!$articulo){
        header("Location: index.php");
    }


    $totalarticulo = $conexion -> query('SELECT FOUND_ROWS() as total');
    //echo $totalarticulo;

    $totalarticulo = $totalarticulo -> fetch()['total'];

    // La funcion Ceil redondea hacia arriba el resultado de una operacion
    $numeroPaginas = ceil($totalarticulo / $postPorPagina);

    
    require 'index.view.php';
?>