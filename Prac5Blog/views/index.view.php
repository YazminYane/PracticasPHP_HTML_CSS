<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/87d300590f.js"></script>
    <link rel="stylesheet" href="estilos.css">
    <title>Mi primer blog</title>
    
</head>
<body>
    <header>
        <div class="contenedor">
           <div class="logo izquierda">   
                <p><a href="#">Mi primer blog</a></p>
            </div>

            <div class="derecha">
                <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
                    <input type="text" class="">
                </form>
            </div>
        </div>
    </header>
</body>
</html>