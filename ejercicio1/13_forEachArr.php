<?php

    # Arreglo indexado
    $meses = array(
        'Enero', 'Febreo', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',
        'Diciembre'
    );

    # Arreglo asociativo
    $alejandro = array('telefono' => 5597585648, 'edad' => 20, 'pais' => 'México');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Recorrer Arreglo indexados o asociativos</title>
    </head>
    <body>
        <h1>Codigo de HTML</h1>
        <ul>
            <?php
                
                echo ' IMPRIMIR AREGLO INDEXADO ' . '<hr>';
                
                //IMPRIMIR UN ARREGLO INDEXADO
                foreach( $meses as $mes ){ 
                    echo '<li>' . $mes . '</li>' ;
                }
                

                echo ' IMPRIMIR AREGLO ASOCIATIVO ' . '<hr>';

                //IMPRIMIR UN ARREGLO ASOCIATIVO
                # recorre alejadro y por cada dato muestra su valor
                foreach( $alejandro as $dato => $valor ){ 
                    echo '<li>' .$dato . ' : '. $valor . '</li>';
                }
            ?>
        </ul>           
    </body>
</html>