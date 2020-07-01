<?php
    if($_POST){
        echo $_POST['cosa'];
    }
    
?>
<!DOCTYPE html>
<!--- Enviar datos a la misma pagina-->
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Document</title>
    </head>

    <body>
        <!--- $_SERVER: hace referencia a una variable global -->
        <!--- PHP_SELF: hace referencia al mismo archivo -->
        <form action = "<?php ($_SERVER['PHP_SELF']);?>" method ="post">

            <input type="text" placeholder="Nombre:" name="cosa">
            <br>

            <label>"Hombre"</label>

            <input type="radio" name = "sexo" value ="hombre" id="hombre">
            <br>

            <label>"Mujer"</label>
            <input type="radio" name = "sexo" value="Mujer" id="mujer">
            <br>

            <select name = "year" id = "year">
                <option value="2000"> 2000 </option>
                <option value="2001"> 2001 </option>
                <option value="2002"> 2002 </option>
            </select>
            <br>

            <label for="terminos">Acepta los terminos </label>
            <input type="checkbox" name="terminos" id="terminos" value="ok">
            <br>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>