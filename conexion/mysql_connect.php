<?php 

    #------------------------------------------------------------------------------
    #                                mysql_connect 
    #------------------------------------------------------------------------------

    #connexion a una bd, esta funcion mysql_connect es obsoleta en php7
    $conexion = mysql_connect('localhost','root','');
    
    mysql_select_db('dbPrueba', $conexion);

    $resultados = mysql_query('SELECT * FROM articulo');

    //esta funcion recupera toda una fila de datos
    $fila = mysql_fetch_object($resultados); 

    echo $fila->nombre;

    

?>