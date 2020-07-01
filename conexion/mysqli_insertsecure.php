<?php

#------------------------------------------------------------------------------
#  realiza un inster de forma segura con prepare
#  null, 1, 'Disco Duro 1Tb SD', 'Disco duro Toshiba ', '159874236', 60, 1                   
#------------------------------------------------------------------------------

$conexion = new mysqli("localhost", "root", "", "dbPrueba" ); 

if($conexion -> connect_errno){  

    die ('Hubo un problema con la conexion');  

}else{

    // indica que se prepare la bd solo para insetar estos valores
    $statement = $conexion -> prepare ("INSERT INTO articulo (id_articulo, idcategoria, nombre, descripcion, codigo, stock, condicion) 
                          VALUES ( ?, ?, ?, ?, ?, ?, ? )");
                          
    //Remplazamos los placeholder(?) con los valores que queremos usar
        //Una s por placeholder que tengamos
        // s = string
        // i = integer
        // d = double 
    
    // Pasa los valores al place holder
    $statement -> bind_param('sisssii', $idArticulo, $idCategoria, $nombre, $descripcion, $codigo, $stock, $condicion );
    $idArticulo = NULL;

    if( isset($_GET['idCategoria']) && isset($_GET['nombre']) && isset($_GET['descripcion'])
        && isset($_GET['codigo']) && isset($_GET['stock']) && isset($_GET['condicion']) ){
        
        $idCategoria = $_GET['idCategoria'];
        $nombre = $_GET['nombre'];
        $descripcion = $_GET['descripcion'];
        $codigo = $_GET['codigo'];
        $stock = $_GET['stock'];
        $condicion = $_GET['condicion'];

    }

    // Ejecuta la consulta
    $statement -> execute();

    if( $conexion -> affected_rows >= 1 ){

        echo 'Se han insertado ' . $conexion -> affected_rows . ' registros';
    
    }else{

        echo 'No se han insertado registros';

    } // Fin del else
}// Fin del else


?>