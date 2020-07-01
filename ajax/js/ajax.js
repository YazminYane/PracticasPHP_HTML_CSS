var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click', function(){

    var peticion = new XMLHttpRequest();
    peticion.open('GET', 'http://www.json-generator.com/api/json/get/cfelRPBeoO?indent=2');

    loader.classList.add('active');

    peticion.onreadystatechange = function(){

        /*cada peticion regresa un numero y se ejuta en cada cambio
        2 peticion fue recibida
        3 peticion esta siendo pro cesada
        4 peticion terminada y respuesta lista 
        200 significa que el estatus es correcto
        */

        //si la peticion esta lista y todo esta correcto
        if( peticion.readyState == 4 && peticion.status == 200 ){
            loader.classList.remove('active');
        }
    }

    peticion.send();
});
