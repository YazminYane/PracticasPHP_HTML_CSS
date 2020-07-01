<?php
  

    $amigo = array('telefon' => 5522316548, 'edad' => 20, 'pais' => 'mexico');

    #extrae los elementos de un arreglo asociativo como si fueran variables
    extract($amigo);
    echo $edad;

    $semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 
                  'Sabado', 'Domingo'
    );

    #Elimina el ultimo elemento del arreglo 
    array_pop($semana);

    foreach( $semana as $dia ){
        echo $dia . '<br />';
    }

    #Muestra todos los elementos separados por el caracter especificado
    echo join(' - ', $semana);
    echo join('<br />', $semana);

    #Cuenta el numero de elemntos que hay en el arreglo 
    echo count($semana) . '<br />';

    #Odena los elemtos de un arreglo
    sort($semana);
    echo join(' , ', $semana) . '<br />';

    #Para invertir el ordenamiento
    $semanaReverse = array_reverse($semana);
    echo join(' , ', $semanaReverse);





?>