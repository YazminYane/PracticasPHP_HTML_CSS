<!DOCTYPE html>
<!--- Se describe las diferencias / los metodos post y get-->
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Document</title>
    </head>
    <body>
        <!---Con la etiqueta form se encierran formularios y permite
            varios atributos -->
        <!--- <form action = "recibe.php" method ="post" -->
        <form action = "1_recibe.php" method ="get">

            <!---Caja de texto -->
            <input type="text" placeholder="Nombre:" name="cosa">
            <br>

            <!--- Etiqueta de texto-->
            <label>"Hombre"</label>
            <!--- Para objetos tipo radio el name debe ser igual
            para que esten realacionados -->
            <input type="radio" name = "sexo" value ="hombre" id="hombre">
            <br>

            <label>"Mujer"</label>
            <input type="radio" name = "sexo" value="Mujer" id="mujer">
            <br>

            <!--- check list -->
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