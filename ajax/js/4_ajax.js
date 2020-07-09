/*------------------------------------------------------------------------------------------------
/  En este ejercicio se muestra los datos desde una base de datos  
/  Con un archivo del 4_usuarios.php
/  En este ejercicio el boton agregar si funciona 
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

btn_cargar.addEventListener('click', function(){
    cargarUsuarios();
});


/*
function cargarUsuarios(e){

}

function agregarUsuarios(e){
    e.preventDefault

    var peticion = new XMLHttpRequest();
    peticion.open('POST', 'php/5_insertar.php');
}


formulario.addEventListener('submit', function(e){
    agregarUsuarios(e);
});
*/

