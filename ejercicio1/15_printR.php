<?php
    $texto = 'Carlos';
    $numero = 10;
    $numero2 = '5';
    $arreglo = array('Carlos', 'Cesar', 'Alejandro');
    $arrAsociativo = array('nombre' => 'Carlos', 'edad' => 20);
    $booleano = false;

    #PRINT_R : tambien muestra el dato de una variable 

    # Brinda el dato de esa varible
    print_r($texto);

    echo "<pre>";
      print_r($arreglo);
    echo "</pre>";

    print_r($arrAsociativo);

    # en esta no se muestra nada en la variable booleano
    print_r($booleano);

    #a qui de muestra el tipo de dato booleano y su valor
    var_dump($booleano);

  
?>