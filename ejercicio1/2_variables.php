<?php
    // Las variables empiezan con $ y es sensible a mayus y min
    $nombre = "Yazmin";   # las cadenas pueden ir con "" o ''
    
    # Numeros enteros
    $num1 = 7; 
    $num2 = 4;
    $res = 0;

    #numeros decimales
    $num_decimal =7.2;

    #Tipo de dato booleano
    $verdadero = false;

    #array: arreglos
    #objeto: objeto
    #class: clase
    #null:  Cuando a una variables aun no se le asigna ningun valor
    $var;

    $res = $num1 + $num2;

    echo $nombre;
    echo $res;
    # las comillas "" permiten traer variables con su valor
    echo "Hola, $nombre";
    echo 'Hola, $nombre';

    #recomendado
    echo 'Hola ' . $nombre;

    #conocer el tipo de dato de una variable
    echo gettype($nombre);
?>