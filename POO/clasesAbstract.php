<?php 

    /* Las clases abstractas se usan para que no se puedan acceder a ellas a menos que
    sean heredadas, protegen la clase */
     
    abstract class Persona{
        public function saludo(){
            return 'Hola';
        }
    }

    class Estudiante extends Persona{

    }

  
    $carlos = new Estudiante;
    echo $carlos -> saludo();


?>