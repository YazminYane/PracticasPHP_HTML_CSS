<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Galeria</title>
        <link rel="stylesheet" href="css/estilos.css">
        <script src="https://use.fontawesome.com/87d300590f.js"></script>
    </head>

    <body>

        <header>
            <div class="contenedor">
                <h1 class="titulo">Subir Foto</h1>
            </div>
        </header>

        <div class="contenedor">
            <form class="formulario" method="post" enctype="multipart/form-data" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                
                <label for="foto">Selecciona tú foto</label>
                <input type="file" id="foto" name="foto">

                <label for="titulo">Titulo de la foto</label>
                <input type="text" id="titulo" name="titulo">

                <label for="texto">Descripcion</label>
                <textarea name="texto" id="texto" placeholder="Ingresa un descripcion"></textarea>

                <?php if(isset($error)): ?>
                    <p class="error"> <?php  echo $error  ?> </p>
                <?php endif ?>
                
                <input type="submit" class="submit" value="Subir Foto">
                
            </form> <!-- Fin de la clase formulario -->
        </div> <!-- Fin de clase contenerdor -->

        <footer>
            <p class="copyright">Galeria creada por Yazmin Santiago - YazminYane</p>
        </footer>

    </body>
</html>