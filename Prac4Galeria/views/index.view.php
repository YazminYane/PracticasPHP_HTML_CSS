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
                <h1 class="titulo">My primer galeria en PHP y Mysql</h1>
            </div>
        </header>

        <section class="fotos">
            <div class="contenedor">
                
                <?php foreach( $fotos as $foto): ?>
                    <div class="thum">
                        <a href = "foto.php?id=<?php echo $foto['id_foto'];  ?> ">
                            <img src = "fotos/<?php echo $foto['imagen']; ?>" >
                        </a>
                    </div>
                <?php endforeach; ?>


                <div class="paginacion">

                    <?php if($pagina_actual > 1): ?>
                        <a href = "index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
                    <?php endif ?>

                    <?php if($total_paginas != $pagina_actual): ?>
                        <a href = "index.php?p=<?php echo $pagina_actual + 1; ?>" class="Derecho">Página Siguiente <i class="fa fa-long-arrow-right"> </i></a>
                    <?php endif ?>

                    <!--
                    <a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
                    <a href="#" class="Derecho">Página Siguiente <i class="fa fa-long-arrow-right"> </i></a>
                    -->
                    
                </div>  <!-- Fin de la clase paginacion -->

            </div>  <!-- Fin de la clase contenedor -->
        </section> <!-- Fin de la clase fotod -->
        
        <footer>
            <p class="copyright">Galeria creada por Yazmin Santiago - YazminYane</p>
        </footer>


    </body>
</html>