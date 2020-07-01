<!DOCTYPE html>
<!--- Comprobar si un formalurio ha sido enviado-->
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Document</title>
    </head>

    <body>
        <form action = "3_validarEnvio.php" method="post">

            <input type="text" name="cosa" placeholder="Nombre">
            <input type="email" name="correo" placeholder="Correo">
            

            <input type="submit" name="submit" value="Enviar">
        </form>

        <form action = "3_validarEnvio.php" method="post">

            <input type="text" name="cosa" placeholder="Nombre">
            <input type="email" name="correo" placeholder="Correo">
            

            <input type="submit" name="submit-formulario2" value="Enviar">
        </form>

    </body>
</html>