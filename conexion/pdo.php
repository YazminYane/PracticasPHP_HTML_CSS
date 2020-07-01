<?php
      $id = $_GET['id'];  # este valor se agrega en el navegador ?id=1

try {

    $conexion = new PDO('mysql:host=localhost;dbname=dbPrueba', 'root', '');
    
    #--------------------------------------------------------------------------------------------
    #    Metodo prepare (Es la recomendada) y tiene mas ventajas sobre mysqli
    #--------------------------------------------------------------------------------------------


    // se prepara la consulta 
    $statement = $conexion -> 
    prepare('select * from articulo where id_articulo = :id or :id2');  #poner un placeholder y se sustiyuira despues
    
    #execute : ejecuta la consulta
    $statement -> execute(  // manda a llamar al metodo execute execute recibe un arreglo como parametro
        array(
            ':id' => $id, 
            ':id2' => 2
        )  #el place holder anterior se reemplazara por $id 
    );

    # imprime una fila 
    $resultado = $statement -> fetch();   #fetch : solo trae un valor 
    $resultado = $statement -> fetchall();  #fetchall : mostrara todos los elementos que traiga la consulta 
    echo "<pre>";
    print_r($resultado);
    echo "</pre>";

   #para imprimir una columna del resultado de una tabla
   /*
   foreach($resultado as $articulo){
       echo $articulo['nombre'] . '<br />';
   }
   */
    #--------------------------------------------------------------------------------------------
    #                  Metodo query(en esta el usuario podria inyectar codigo) 
    #--------------------------------------------------------------------------------------------
    #guarda en resultado el resultado de la consulta
    
    /*
    $resultado = $conexion->query("Select * from articulo where id_articulo = 2");
    
    foreach($resultado as $fila){
        echo $fila['nombre'] . '<br />';
        echo $fila['codigo'] . '<br />';
    }
    */


    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>