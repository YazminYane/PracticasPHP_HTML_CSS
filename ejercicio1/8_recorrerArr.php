<?php
    $meses = array(
        'Enero', 'Febreo', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',
        'Diciembre'
    );
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Meses del año</title>
    </head>
    <body>
        <h1>Codigo de HTML</h1>
        <ul>
            <?php

                foreach($meses as $mes ){  //Por cada mes ejecuta lo siguiente
                    echo '<li>' . $mes . '</li>' ;
                }

            ?>
        </ul>           
    </body>
</html>