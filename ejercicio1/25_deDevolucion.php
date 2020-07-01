<?php

    # esto se usa en php7
    
    /*PHP es inteligente y puede convertir '5' a int 5 pero con strict_types
    ya no lo hara */

    declare(strict_types = 1); //  estrictamente funcion trabajará con lo indicado
    function obetenerEdad() : int { // estrictamente debe devolver un int u otro  

        #$edad = '5';   //Marcara el error
        $edad = 4;    // ya no marca el error
        return $edad;
    }

    echo obetenerEdad();
?>