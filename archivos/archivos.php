<?php
    #---------------------------------------------------------------------------------------------------------------
    #                                  MANEJO DE ARCHIVOS
    #---------------------------------------------------------------------------------------------------------------
    
    // La funcion indica si el archivo existe
    // Muestra el booleano de si se encuentra el archivo o no 
    $resultado = file_exists('documento');
    var_dump($resultado);   
    
    // Imprime el contenido del curso
    echo file_get_contents('documento');
    
    // Inserta mas texto debajo del que hay
    file_put_contents('documento', "Hola Yazmin Yanela \n", FILE_APPEND);

    // numera en el documento una columa 
    for( $i=1 ; $i <= 10 ; $i++ ){
        file_put_contents('doc',"$i \n", FILE_APPEND);
    }

    // Convierte un archivo en un areglo y cada fila en u elemento del arreglo
    $archivo = file('doc');
    
    // Imprime el arreglo 
    echo "<pre>";
    print_r($archivo);
    
    // Immprime un elemento del arreglo
    echo $archivo[7];
    
?>