
/*------------------------------------------------------------------------------------------------
/  En este ejercicio se muestran los datos en la tabla desded una archivo JSON creado en: 
/  https://www.json-generator.com/
/  En este ejercicio el boton agregar no hace nada 
/------------------------------------------------------------------------------------------------*/

var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click', function(){

    var peticion = new XMLHttpRequest();

    /* Hace una peticion a la liga para acceder al json*/
    //peticion.open('GET', 'http://www.json-generator.com/api/json/get/cfelRPBeoO?indent=2');

    //Accede a un JSON en el mismo directorio del proyecto
    peticion.open('GET', 'php/4_usuarios.php');
    

    /* El loader de la pagina al cargar la informacion */    
    loader.classList.add('active');

    peticion.onload = function(){

        /* Trae la primera fila del archivo de texto, en este caso el JSON ya que no lo reconoce como archivo JSON 
        console.log(peticion.responseText[0]); 
        */

        /*
        // Con JSON.parse convertimos el "archivo texto"  a json que lo reconoce el sistema
        // Trae los datos de la primera posicion del arreglo 
        console.log(JSON.parse(peticion.responseText)[0]); 
        */

        var datos = JSON.parse(peticion.responseText);

        //En esta parte se cargan los primeros 5 datos 
        for(var i = 0 ; i < 5 ; i++){

            var elemento = document.createElement('tr');

            elemento.innerHTML += ( "<td>" + datos[i].id_usuario + "</td>");
            elemento.innerHTML += ( "<td>" + datos[i].nombre + "</td>");
            elemento.innerHTML += ( "<td>" + datos[i].edad + "</td>");
            elemento.innerHTML += ( "<td>" + datos[i].pais + "</td>");
            elemento.innerHTML += ( "<td>" + datos[i].email + "</td>");

            document.getElementById('tabla').appendChild(elemento);

        }

        /*
        // Esta es una forma de traer los datos del JSON a la tabla 
        datos.forEach( persona =>{
            var elemento = document.createElement('tr');

            elemento.innerHTML += ( "<td>" + persona.id + "</td>");
            elemento.innerHTML += ( "<td>" + persona.nombre + "</td>");
            elemento.innerHTML += ( "<td>" + persona.edad + "</td>");
            elemento.innerHTML += ( "<td>" + persona.pais + "</td>");
            elemento.innerHTML += ( "<td>" + persona.email + "</td>");

            document.getElementById('tabla').appendChild(elemento);
        });
        */
    }


    peticion.onreadystatechange = function(){

        /*cada peticion regresa un numero y se ejuta en cada cambio
        2 peticion fue recibida
        3 peticion esta siendo pro cesada
        4 peticion terminada y respuesta lista 
        200 significa que el estatus es correcto
        */

        //si la peticion esta lista para tomar los datos y todo esta correcto
        if( peticion.readyState == 4 && peticion.status == 200 ){
            loader.classList.remove('active');
        }
    }

    /* Envia la peticion */
    peticion.send();
});
