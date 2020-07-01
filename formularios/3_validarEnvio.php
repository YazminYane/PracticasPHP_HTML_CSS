<?php

    #accedemos a la variable global $_SERVER
    # REQUEST_METHOD : accede al metodo de envio 
    /*
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        
        echo "Se envio por GET";
    }else{
        echo "Se enviaron por POST";
    }
    */

    # Esta forma es recomendable si se tienen que enviar varios formularios
    # Determina si una variable está definida y no es NULL.
    if (isset($_POST['submit-formulario2'])) {

        echo "Se han enviado los datos correctamente";
        //print_r($_POST['submit']);
    
    }
?>