<?php
    # esto se usa en php7
    # declaraciones de tipo escalar

    function cuadrado( int $numero){
        return $numero * $numero;
    }

    #esta operacion si se realiza pero asigna un 0 ya que no se puede hacer la
    # multiplicacion de una cadena
    $numero = '4';
    echo 'El cuadrado de: ' . $numero . ' es: ' . cuadrado($numero);

    # PHP trata de encontrar el numero para trabajar, de no ahcerlo 
    # asigna el 0 con un warning
?>
