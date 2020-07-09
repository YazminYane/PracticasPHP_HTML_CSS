<?php
    //----------------------------------------------------------------------------------------
    //              Conexion a la BD
    //----------------------------------------------------------------------------------------

    error_reporting(0); // Al tener un error regrasará un true y no mandara nada
    header( 'Content-type: application/json; charset=utf-8' );

    $conexion = new mysqli('localhost', 'root', '', 'dbPrueba');
    
    if( $conexion->connect_errno ){ 

        //Indica que el PHP regresará un arreglo con un error 
        $respuesta = [
            'error' => true
        ];

    }else{

        //debe trabajar con utf8 tanto para enviar como traer datos
        $conexion -> set_charset("utf8"); 
        $statement = $conexion -> prepare("SELECT * FROM usuariosAjax");
        $statement -> execute();

        $resultados = $statement -> get_result();

        $respuesta = [];

        while( $fila = $resultados->fetch_assoc() ){ 
            $usuario = [ // Se crea un arreglo por cada usuario
                'id_usuario'    => $fila['id_usuario'],
                'nombre'        => $fila['nombre'],
                'edad'          => $fila['edad'],
                'pais'          => $fila['pais'],
                'email'         => $fila['email']
            ];

            array_push($respuesta, $usuario);
        }
    }

    echo json_encode($respuesta);

?>