 
    //--------------------------------------------------
    //      Forma de declarar varoables e impresion
    //--------------------------------------------------
    var nombre = 'Carlos';
    var edad = 23;
    var pais = 'México';

    var nombre2 = 'Alejandro';
    var edad2 = 2;
    var pais2 = 'España';

    console.log(nombre);


    //--------------------------------------------------
    //      Estos son objetos en javascript
    //--------------------------------------------------
    var carlos = {
        "nombre": "Carlos Arturo",
        "edad": 23,
        "pais": "México"
    }

    var alejandro = {
        "nombre": "Alejandro Arturo",
        "edad": 23,
        "pais": "España"
    }

    //Imprimir un dato de un objeto
    console.log(alejandro.nombre);

    
    //--------------------------------------------------
    //      Formas de declarar un arreglo
    //--------------------------------------------------

    //Esto es un arreglo 
    var nombreAmigos = ['Alejandro', 'Manuel'];

    //declaracion del arreglo
    var arreglo = [];


    //--------------------------------------------------
    //                EJEMPLO DE JSON
    //--------------------------------------------------

    //Este es una arreglo con elementos de objetos
    var amigos = [
        {
            "nombre": "Alejandro",
            "edad": 30,
            "pais": "España"
        },
        {
            "nombre": "Manuel",
            "edad": 24,
            "pais": "Colombia"
        }
    ]

    //Imprime el arreglo con todos los elementos
    console.log(amigos);

    //Formas de acceder al arreglo
    console.log(amigos[0].pais);