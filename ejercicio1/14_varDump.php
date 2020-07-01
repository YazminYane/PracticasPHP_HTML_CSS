<?php
    $texto = 'Carlos';
    $numero = 10;
    $numero2 = '5';
    $arreglo = array('Carlos', 'Cesar', 'Alejandro');
    $arrAsociativo = array('nombre' => 'Carlos', 'edad' => 20);
    $booleano = false;

    #VAR_DUMP : PUEDE MOSTRAR INFORMACION DE UN BOOLEANO A DIFERENCIA DE PRINT_R 

    # Brinda las caracteristicas de un variable o funcion 
    var_dump($numero);

    # Muestra informacion listada
    echo "<pre>";
        var_dump($arreglo);
    echo "</pre>";
?>