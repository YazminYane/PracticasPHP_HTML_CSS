<?php
    session_start(); 
    if($_SESSION){
        $nombre = $_SESSION['nombre'];
        echo "<h1>Hola, $nombre</h1>";

    }else{
        echo "No has iniciado sesion";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Pagina 2</title>

    </head>
    <body>

        <h1> Hola, Bienvenido <?php echo $_SESSION['nombre']; ?> </h1>
        <a href = 'cerrarS.php'> Cerrar Sesion </a>

    </body>
</html>