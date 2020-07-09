<?php

    // Con esto no se muestra un error en pantalla
    //error_reporting(0);

    //Para indicar que el archivo tendrá la estructura de Un JSON
    //header( 'Content-type: application/json; charset=utf-8' );

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $pais = $_POST['pais'];
    $correo = $_POST['correo'];

    // Funcion que valida los datos de entrada
    function validarDatos( $nombre, $edad, $pais, $correo ){

        if( $nombre == ''){
            return false;
        }elseif( $edad == '' || is_int($edad) ){
            return false;
        }elseif($pais == ''){
            return false;
        }elseif($correo == ''){
            return false
        }

        return true;
    }

    if(validarDatos($nombre, $edad, $pais, $correo)){ // si esta funcion devuelve verdadero

        $conexion = new mysqli('localhost', 'root', '', 'dbPrueba');
        $conexion -> set_charset('utf8'); //los datos se trataran con esta codifcicación 

        if( $conexion -> connect_errno){ // si la no es conexion correcta

            $respuesta = [ 'error' => true ]
        
        }else{

            $statement = $conexion -> prepare(
                "INSERT INTO usuariosAjax(nombre, edad, pais, email) VALUES (?, ?, ?, ?)"
            );

            //siss : string, int, string, string 
            $statement -> bind_param( "siss", $nombre, $edad, $pais, $correo);
            $statement -> execute();    //Executa la consulta 

            if( $conexion -> affected_rows <= 0){
                $respuesta = [ 'error' => true ];
            }
            $respuesta = [];

        }
        
    }else{
        $respuesta = ['error' => true ];
    }

    $respuesta = [];
    echo json_encode($respuesta);

   

?>