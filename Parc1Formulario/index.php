<?php

    $errores = '';
    $enviado = '';

    /* isset() : comprueba si una variable está definida o no  */
    /* al submmit se pasan los valores a post */
    if (isset($_POST['submit'])) {

        /*Variables de los datos */
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        if (!empty($nombre)) { /*si nombre no esta vacion*/ 

            #elmina espacios en blanco al inicio o final de una cadena
            $nombre = trim($nombre);

            // Elimina etiquetas o caracteres especiales
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

        }else { /*si esta vacio*/ 
            $errores .= 'Por favor ingresa un nombre <br />';
        } /*Fin de if */

        if(!empty($correo)){

            /* Sanitizar Qquitando caracteres especiales */ 
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
            
            /* Si el correo es verdadero regresa el correo de lo 
             contrario devuelve false */
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){

                $errores .= 'Por favor ingresa un correo valido <br /> ';
            }

        }else{
            $errores .= 'Por favor ingresa un correo <br /> ';
        } /* fin de if */

        if(!empty($mensaje)){
            $mensaje = htmlspecialchars($mensaje); /*Convierte los caracteres en especiales */
            $mensaje = trim($mensaje); /* Quita espacios en blanco */
            $mensaje = stripslashes($mensaje); /** Quita /  \  //   */
        }else{
            $errores .= 'Por favor ingresa el mensaje <br />';
        }

        if(!$errores){
            $enviar_a = 'tunombre@tuempresa.com';
            $asunto = 'Correo envido desde miPagina.com';
            $mensaje_preparado = "De: $nombre \n";
            $mensaje_preparado .= "Correo: $correo \n";
            $mensaje_preparado .= "Mensaje: " . $mensaje;

            /**deja de marcar error si el sitio estuviera hosteado */
            // mail($enviar_a, $asunto, $mensaje_preparado);
            $enviado = 'true';
        }
    }
    require 'view.php';
?>
