<?php
    $meses = array(
        'Enero', 'Febreo', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',
        'Diciembre'
    );

    #ORDENA LOS MESES EN ORDEN ALFABETICO (Ascendente)
    sort($meses);

    #ORDENA LOS MESE EN AL REVES (Descendente)
    rsort($meses);

    $numeros = array(1, 22, 23, 59 ,87, 6, 10, 8);

     #ORDENA LOS MESES EN ORDEN ALFABETICO (Ascendente)
     sort($numeros);

     #ORDENA LOS MESE EN AL REVES (Descendente)
     rsort($numeros);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Meses del año</title>
    </head>
    <body>
        <h1>Codigo de HTML</h1>
        <ul>
            <?php

                foreach($meses as $mes ){  //Por cada mes ejecuta lo siguiente
                    echo '<li>' . $mes . '</li>' ;
                }

                foreach($numeros as $numero ){
                    echo '<li>' . $numero . '</li>';
                }

            ?>
        </ul>           
    </body>
</html>

