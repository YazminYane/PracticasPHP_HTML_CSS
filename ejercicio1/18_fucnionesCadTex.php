<?php
    $texto = '< > & " " ';
    $palabra = ' Hola ';
    $cadena = 'Lunes';
    $minuscula = 'esta cadena esta en minuscula';
    $mayuscula = 'esta cadena esta en Mayuscula';

    #Permite convertir los caracteres en identidades especiales
    #para que no se den la inyeccion de codigo 
    echo htmlspecialchars($texto);

    #elmina espacios en blanco al inicio o final de una cadena
    echo trim($palabra);

    #CAlcula el tamaño de un string 
    echo strlen($cadena);
    
    #Retorna un pedazo de una linea de cadena de texto
    echo substr($cadena, 2, 3);

    #Convierte todos los caracteres en Mayuscula 
    echo strtoupper($mayuscula);

    #Convierte todos los caracteres en Mayuscula
    echo strtolower($mayuscula);

    #Da a conocer en que posicion se encuentra una letra
    #empieza desde el cero
    echo strpos($cadena, 'n');
?>