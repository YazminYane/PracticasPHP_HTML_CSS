/*------------------------------------------------------------------------------------------------
/  En este ejercicio se muestra los datos desde una base de datos  
/  Con el archivo 4_usuarios.php
/  En este ejercicio se pretende que el boton agregar si funcione 
/------------------------------------------------------------------------------------------------*/

var btn_cargar = document.getElementById('btn_cargar_usuarios'),
    error_box = document.getElementById('error_box'),
    tabla = document.getElementById('tabla'),
    loader = document.getElementById('loader');


var usuario_nombre,
    usuario_edad,
    usuario_pais,
    usuario_correo;


function cargarUsuarios(){

    // Para que se al clickear se reinicie la tabla y cargue todo de de nuevo 
    tabla.innerHTML = '<tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Pais</th><th>Correo</th></tr>';

    var peticion = new XMLHttpRequest();
    peticion.open('GET', 'php/4_usuarios.php');

    loader.classList.add('active');

    
    // Peticion.onload = function(): Ejecuta una funcion, cuando la informacion ya esta cargada   
    peticion.onload = function(){

        var datos = JSON.parse(peticion.responseText); // Guarda los datos en la variable datos y se deben convertir JSON
        //console.log(datos);

        if (datos.error) {      //si es true
            
            // Manda un mensaje de error al ususario 
            error_box.classList.add('active');

        }else{
            for(var i =  0 ; i < datos.length ; i++){

                var elemento = document.createElement('tr');

                elemento.innerHTML += ( "<td>" + datos[i].id_usuario + "</td>");
                elemento.innerHTML += ( "<td>" + datos[i].nombre + "</td>");
                elemento.innerHTML += ( "<td>" + datos[i].edad + "</td>");
                elemento.innerHTML += ( "<td>" + datos[i].pais + "</td>");
                elemento.innerHTML += ( "<td>" + datos[i].email + "</td>");
    
                tabla.appendChild(elemento);
            }
        }  
    }

    peticion.onreadystatechange = function(){

        if ( peticion.readyState == 4 && peticion.status == 200 ) {

            loader.classList.remove('active');
            
        }
    }

    peticion.send();
}

//Se ejecuta cada que se clickea en cargar usuarios
function agregarUsuarios(e){

    e.preventDefault();     // se evita el envio del formulario

    var peticion = new XMLHttpRequest();    

    peticion.open('POST', 'php/5_insertar.php');

    //Obtenert datos del formulario y con trim() Elimina espacios en blanco de la cadena
    usuario_nombre = formulario.nombre.value.trim();
    // Convierte el texto a entero, pero de no haber algún numero no regresara que no es numero
    usuario_edad = parseInt(formulario.edad.value.trim());
    usuario_pais = formulario.pais.value.trim();
    usuario_correo = formulario.correo.value.trim();


    if( formulario_valido() ){

        // console.log('Todo esta correcto');

        error_box.classList.remove('active');

        var parametros = 'nombre=' + usuario_nombre + '&edad=' + usuario_edad + '&pais=' + usuario_pais + '&correo=' + usuario_correo;

        // Establece el header de como queremos enviar la peticion, cuando se recibe ni es necesario
        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        loader.classList.add('active');

        peticion.onload = function(){
            //Vuelve a cargar los datos de la tabla 
            cargarUsuarios();

            //Al cargar los datos limpia las respectivas cajas de texto
            formulario.nombre.value = '';
            formulario.edad.value = '';
            formulario.correo.value = '';
            formulario.pais.value = '';   
        }
        
        peticion.onreadystatechange = function(){

            if(peticion.readyState == 4 && peticion.status == 200){
                loader.classList.remove('active');
            }
        }

        // A si se envian los datos a php
        peticion.send(parametros);

        // Los datos que esta enviando a insertar.php
        console.log(parametros);

    }else{

        error_box.classList.add('active');
        //error_box.innerHTML = 'Por favor complete el formulario correctamente';
    }
}

// Esta funcion le funcion a cargarUsuarios
btn_cargar.addEventListener('click', function(){
    cargarUsuarios();
});

// Esta funcion al boton cargar
formulario.addEventListener('submit', function(e){
    agregarUsuarios(e);
});

function formulario_valido(){
    if(usuario_nombre == ''){
        return false;
    }else if(isNaN(usuario_edad)){ // Pregunta si el parametro es un numero
        return false;
    }else if(usuario_pais == ''){
        return false;
    }else if(usuario_correo == ''){
        return false;
    }

    return true;
}




