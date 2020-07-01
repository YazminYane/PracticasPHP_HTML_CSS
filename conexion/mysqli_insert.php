<?php
    #------------------------------------------------------------------------------
    #  realiza un inster con riesgo de  inyección de código                       
    #------------------------------------------------------------------------------


    $conexion = new mysqli("localhost", "root", "", "dbPrueba" );  #crear una instancia o mysqli


    
    if($conexion -> connect_errno){  

        die ('Hubo un problema con la conexion');  

    }else{

        #$sql = "select * from articulo WHERE id_articulo = $id";
        $sql = "INSERT INTO articulo (id_articulo, idcategoria, nombre, descripcion, codigo, stock, condicion) 
                            VALUES ( null, 1, 'Disco Duro 1Tb SD', 'Disco duro Toshiba ', '159874236', 60, 1 )";           
        $resultado = $conexion -> query($sql); 
        
        if($conexion -> affected_rows >= 1){

            // affected_rows devielve el numero de filas afectadas
            echo 'Filas afectadas: ' . $conexion -> affected_rows;
        }

        
    }// Fin del else
?>