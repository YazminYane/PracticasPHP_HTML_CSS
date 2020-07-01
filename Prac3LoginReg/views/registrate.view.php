<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="URF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" href="css/estilos.css">
        <script src="https://use.fontawesome.com/87d300590f.js"></script>
        <title>Registrate</title>
    </head>
    <body>
        <div class="contenedor">
            <h1 class="titulo"> Registrate </h1>
            <hr class="border">

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
                <div class="form-group">
                    <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
                </div>

                <div class="form-group">
                    <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">
                </div>

                <div class="form-group">
                    <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Repetir contraseña">
                    <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i> 
                </div>
                
                <?php if( !empty( $errores ) ): ?>
                    <div class="error">
                        <ul>
                            <?php echo $errores ?>
                        </ul>
                    </div>    
                <?php endif; ?>
                
            </form>

            <p class="texto-registrate">
                ¿ Ya tienes cuentas ?
                <a href="login.php">Iniciar Sesion</a>
            
            </p>

        
        </div>
    </body>
</html>