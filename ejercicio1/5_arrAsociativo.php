<?php
    $alex = array('telefono' => '5517959785', 'edad' => 25, 'apellido' => 'Lopez', 'pais' => 'Mexico');

    #IMPRIMIR EL VALOR DE UN ALIAS DEL ARREGLO
    echo $alex['edad'];

    #IMPRIME LOS VALORES DE TODO EL ARREGLO
    print_r($alex);

    #MODIFICAR UN VALOR LLAMANDO AL ALIAS
    $alex['telefono'] = '5522316456';
    echo 'El telefono de alex es:' . $alex['telefono'];
    
?>