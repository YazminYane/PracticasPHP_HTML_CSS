<?php
    $meses = array(
        'Enero', 'Febreo', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',
        'Diciembre'
    );

    #IMPRIMIR LA LONGITUD DE UN ARREGLO
    echo count($meses);

    #IMPRIMIR EL DATO DE LA ULTIMA POSICION
    $ultimo = count($meses) - 1;
    echo $meses[$ultimo];


?>