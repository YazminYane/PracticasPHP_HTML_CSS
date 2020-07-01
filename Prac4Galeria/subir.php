<?php
    
    require 'funciones.php';

    #conexion guarda un false si no se hace correctamente 
    $conexion = conexion('dbPrueba', 'root', '');

    if(!$conexion){ # si no hay conexion
        die();  #mata la ejecucion de la pagina
    }

    #Guarda en un arreglo informacion de los archivos 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
    
      
        # getimagesize: Retorna un arreglo con las propiedades de la imagen
        # de lo contrario retornara un error, el @  es para evitar un NOTICE 
        $check = @getimagesize($_FILES['foto']['tmp_name']);

        if($check !== false){
            $carpeta_destino = 'fotos/';
            $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];

            //Con esta funcion se sube el archivo a la carpeta fotos, (archivo, destino)
            move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

            $statement = $conexion -> prepare(
                'INSERT INTO fotos ( titulo, imagen, texto ) VALUES ( :title, :img, :texto )'
            );

            $statement -> execute( array(
                ':title' => $_POST['titulo'],
                ':img' => $_FILES['foto']['name'],
                ':texto' => $_POST['texto']
            ));

            header('Location: index.php');

        }else{
            $error = "El archivo no es una imagen o el archivo es muy pesado";
        }
    }

    require 'views/subir.view.php';
    
?>