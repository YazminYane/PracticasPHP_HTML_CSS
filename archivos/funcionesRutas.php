<?php

    #----------------------------------------------------------------------------------------------
    #                         FUNCIONES CON RUTAS DE ARCHIVOS 
    #----------------------------------------------------------------------------------------------
        // * PATHINFO_DIRNAME // Devuelve el directorio padre del archivo
        // * PATHINFO_BASENAME // Devuelve el nombre del archivo con su extension
        // * PATHINFO_EXTENSION // Devuelve la extencion del archivo
        // * PATHINFO_FILENAME // Devuve el nombre del archivo 

    # Muestra el nombre y extension del archivo mensionado
    echo pathinfo('documento', PATHINFO_BASENAME) . '</br>';

    # Obtiene el directorio padre del archivo
    echo pathinfo('carpeta/documento', PATHINFO_DIRNAME) . '</br>';

    # Obtiene la extension del ar archivo
    echo pathinfo('documento', PATHINFO_EXTENSION) . '</br>';

    # Extrae el nombre del archivo
    echo pathinfo('documento', PATHINFO_FILENAME) . '</br>';

    # Busca un archivo dedntro de un directorio con un patron y lo guarda en un arreglo
    $resultados = glob('*.php');

    echo '<pre>';
    print_r($resultados);

    /* La funcion anterior puede llevar un segundo parametro y traera los archivos con 
      estas extensiones especificas */
    # Para archivos de la misma carpeta 
    $resultados2 = glob('*.{php,css}', GLOB_BRACE);

    echo '<pre>';
    print_r($resultados2);

    # Para archivos en carpeta diferente
    $resultados3 = glob('Prac2Paginacion/*.{php,css}', GLOB_BRACE);

    echo '<pre>';
    print_r($resultados3);

    # Eliminando toda la ruta del archivo y solo deja el archivo con su extension
    echo basename('carpeta1/carpeta2/archivo.php') . '</br>';

    # Elimina lo que aparezca en el 2do parametro y deja solo el nombre del archivo
    echo basename('carpeta1/carpeta2/archivo.php', '.php') . '<br>';

    # Devuelve las carpetas padres del archivo 
    echo dirname('carpeta1/carpeta2/archivo.php');




?>