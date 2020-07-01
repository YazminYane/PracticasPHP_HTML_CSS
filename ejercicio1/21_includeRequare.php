<?php

    function suma ($num1, $num2){
        $res =  $num1 + $num2;
        return $res;
    }

    # Agregara codigo de otro archivo de no encontrar el archivo 
    # maracara un warning  y continuara con la ejecucion.
    include '21_1_vista.php';

    # Ejecuta una sola vez este archivo 
    include_once '21_1_vista.php';

    # Agrega codigo de otro archivo pero de no encontrar el archivo 
    # Marcara un error
    require '21_1_vista.php';


?>
