<?php

    #DECLARAR UN ARREGLO MULTIDIMENSIONAL
    $amigos = array(
        array('Jonas', 25),
        array('Martha', 16),
        array('Elizabeth', 10)
    );

    #IMPRIMIR UNA POSICION DEL ARREGLO
    echo $amigos[0][1];

    #IMPRIMIR TODO EL ARREGLO
    print_r($amigos);

    $productos = array(
        'Boligrafo' => array(
            'Marca' => "Azor",
            'Precio' => 7.20,
            'Color' => "Azul"

        ),
        'Pegamaento' => array(
            'Marca' => "Pritt",
            'Precio' => 7.20,
            'Color' => "Rojo"
        )
    );

    print_r($productos);


?>