<?php

    if(isset($_POST['submit'])){

        $nombre = $_POST['cosa'];
        $correo = $_POST['correo'];

        if (!empty($nombre)) {                      // valida que nombre no este vacio
            //$nombre = trim($nombre);              // quita los espacios que haya en nombre
            //$nombre = htmlspecialchars($nombre);  // impide que se ejecute codigo html como <b>Yazmin</b>
            //s$nombre = stripcslashes($nombre);    // quita caracteres especiales
            
            // Elimina etiquetas o caracteres especiales
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); 
            echo "Tu nombre es: $nombre <br />";

        }else{

            $errores = "Por favor agrega un nombre";
        }


        if (!empty($correo)){
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); 
            echo "Tu correo es: $correo <br />";

        }else{
            $errores = "Por favor agrega un correo";   
        }

        
    }
?>

<!DOCTYPE html>

<!--- Validar que los datos se han enviado correctamente -->
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Document</title>
        <style>
            .error{color:red;}
        </style>

    </head>

    <body>
        <form action = "<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] );  ?>" method="post">

            <input type="text" name="cosa" placeholder="Nombre">
            <input type="email" name="correo" placeholder="Correo">

            <?php if(!empty($errores)): ?>
                <div class="error"> <?php echo $errores; ?> </div>
            <?php endif; ?>
            

            <input type="submit" name="submit" value="Enviar">
        </form>

    </body>
</html>