<?php
    // para crear sesiones en todas las paginas que se usara sesion
    session_start(); 
    $_SESSION['nombre'] = "Yazmin Yanela";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Sesiones</title>
    
    </head>
    <body>
        <div class="wrap">
            <h1>Pagina de inicio </h1>
            <p> </p>

            <!--- Link que manda a otra pagina  -->
            <a href = 'pagina2.php'> Ir a la página 2</a>

            </form>
        </div>
    </body>
</html>