<?php
    //----------------------------------------------------------------------------------------
    //              Este archivo muestra como se usa PHP para crear un JSON 
    //----------------------------------------------------------------------------------------

    //Para indicar que el archivo tendrá la estructura de Un JSON
    header( 'Content-type: application/json; charset=utf-8' );

    //Datos del archivo JSON 
    $respuesta = [
        [
            'id' => '5ef90cf330329d9031c5ad0d',
            'nombre' => 'Carlos',
            'edad' => 23,
            'pais' => 'México',
            'correo' => 'correo@correo.com'
        ],
        [
             'id' => '5ef90cf330329d9031c5ad0d',
            'nombre' => 'Alejandro',
            'edad' => 23,
            'pais' => 'España',
            'correo' => 'correo@correo.com'
        ]
    ];

    //json_encode nos permite convetir los datos a JSON
    // ES importante que los datos se envien con un echo
    echo json_encode($respuesta);

?>