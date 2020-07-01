<?php

    # ESTA FUNCION RECIBE UN PARAMETRO
    function saludo($nombre){
        echo "Hola usuario " . $nombre . '<br />';
    }

    #SE MANDA A LLAMAR LA FUNCION SALUDO
    saludo('Yazmin');
    saludo('Carlos');


    # ESTA FUNCION SUMA DOS NUMEROS RECIBIDOS COMO PARAMETROS
    function sumar($numero1, $numero2){
        $res = $numero1 + $numero2;
        return $res;
    }

    #IMPRIME EL RESUTADO DE LA OPERACION DE LA FUNCION SUMAR
    echo sumar(5, 16);

?>
