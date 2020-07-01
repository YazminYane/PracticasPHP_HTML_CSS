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
                <h1 class="titulo">Foto: <?php if( !empty( $foto['titulo'] )){
                    echo $foto['titulo'];
                }else {
                    echo $foto['imagen'];
                } ?></h1>
            </div>
        </header>

        <div class="contenedor">
            <div class="foto">
                
                <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
                <p class="texto"><?php echo $foto['texto']; ?><p>

                <!-- Clase del boton regresar -->
                <a href="index.php" class="regresar"> <i class="fa fa-long-arrow-left"></i> Regresar</a>

            </div> <!-- Fin de la clase foto -->
        </div> <!-- Fin de la clase contenedor -->

        <footer>
            <p class="copyright">Galeria creada por Yazmin Santiago - YazminYane</p>
        </footer>

    </body>
</html>