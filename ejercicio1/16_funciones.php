<?php

    #Funcion: es codigo que se puede mandar a llamar para hacer una operacion
    $personas = array('Martha', 'Yazmin', 'Jonas', 'Elizabeth');

    function saludo(){
        echo "Hola";
    }

    echo saludo() . "Yazmin" . '<br />';

    foreach( $personas as $persona){
        echo saludo() . $persona . '<br />';
    }


?>