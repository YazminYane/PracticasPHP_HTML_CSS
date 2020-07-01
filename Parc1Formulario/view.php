<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Formulario Contacto</title>
        <link rel="stylesheet" href="formato.css">

    </head>
    <body>
        <div class="wrap">
            <form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">  

                <!---  No funciona esta parte de codigo <php... echo $nombre ....  -->
                <input type="text" class="form-control" id ="nombre" name="nombre" placeholder="Nombre:" values="<?php echo $nombre ?>">
                <br>
                <br>
                <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" values="<?php if(!$enviado && isset($correo)) echo $correo; ?>">  
                <br>
                <br>
                <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje; ?></textarea>
                <br>
                <br>

                <?php if(!empty($errores)): ?>
                    <div class="alert error">
                        <?php echo $errores?>
                    </div>
                <?php elseif($enviado): ?>
                    <div class="alert success">
                        <p>Los datos se enviaron correctamente </p> 
                    </div>
                <?php endif ?>
                
                <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">

            </form>
        </div>
    </body>
</html>