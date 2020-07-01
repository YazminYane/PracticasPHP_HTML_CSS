<?php
    function contar_usuarios(){
        
        // Archivo = contenido del archivo contador.txt
        $archivo = 'contador';
        
        if( file_exists( $archivo ) ){ //verifica si el archivo existe

            // cuenta = el contenido del archivo + 1 
            $cuenta = file_get_contents( $archivo ) + 1;

            // Inserta en al archivo contador, el dato de $cuenta
            file_put_contents( $archivo, $cuenta );

            // Retorna el numero de cuenta
            return $cuenta;

        }else{

            // Creará un nuevo archivo con el nombre $archivo y le pondra 1
            file_put_contents( $archivo, 1 );
            return 1;

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Contador de Visitas</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <h1>Contador de Visitas</h1>
        <div class="visitantes">
            <p class="numero"><?php  echo contar_usuarios();  ?></p>
            <p class="texto">Visitas</p>
        </div>
    </body>
</html>