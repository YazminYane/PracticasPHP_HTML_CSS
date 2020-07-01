<?php

    #DECLARAR UN ARREGLO
    $semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
    $semana2 = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];


    # IMPRIMIR UN SOLO VALOR
    echo $semana[1];

    #FORMAS DE IMPRIMIR UN ARREGLO

    # 1
    print_r($semana);
    print_r($semana2);
    
    # 2
    $i = 0;

    while ($i <= 6) {
        echo $semana[$i] . '<br />';    #'<br />' : Es un salto de linea
        $i = $i + 1 ;
    }
?>