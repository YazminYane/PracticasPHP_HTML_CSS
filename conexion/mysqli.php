<?php

    // Crea la conexion a la BD
    $conexion = new mysqli("localhost", "root", "", "dbPrueba" );  #crear una instancia o mysqli


    // Si se tiene un posible error en la conexion de DB se mostrara un mensaje
    if($conexion -> connect_errno){  // llama al metodo connect_errno que guarda un error

        die ('Hubo un problema con la conexion');  // die: Mata la ejecucion de la pagina y mand un error

    }else{

        # ----------------------------------------------------------------------------------------------------
        # Si se usa esta parte del codigo WHERE id_articulo = $id se corre el riesgo de inyección 
        # de código  para evitarlo se usa prepare 
        # ----------------------------------------------------------------------------------------------------

        // Para pasar argumentos de la variable global _GET
        $id = isset($_GET['id']) ? $_GET['id'] : 1;

        $sql = "select * from articulo WHERE id_articulo = $id";  // Guarda la cosulta
        $resultado = $conexion -> query($sql); // conecion: con esta funcion se ejecuta un parametro query y lo guarda en resultado
                                               
        # echo $resultado -> num_rows; //esta sentencia imprime el numero de registros que se encontraron 

        if( $resultado -> num_rows ){ // si hay registros traidos de la DB

            /*
            echo '<pre>';
            //imprimira el primer renglon que trae resultados
            //y marcaba un error por  que se tienen un arreglo y se quiere convertir en un String
            var_dump( $resultado -> fetch_assoc() );
            echo '</pre>';

            // imprime sun dato en particular
            echo $resultado -> fetch_assoc()['nombre'];
            */
            
            while( $fila = $resultado -> fetch_assoc() ){  //mientras halla resultados

                echo $fila['id_articulo'] . '-' . $fila['nombre'] . '<br />';
                
            }
        }else{

            echo 'No hay datos';

        }// Fin del else
        
    }// Fin del else
?>