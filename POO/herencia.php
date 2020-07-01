<?php 

    // ***************** TIPOS DE SCOPE ************************
    // atributo PUBLIC 
    // Pueden ser accedidos desde cualquier parte, ya sea dentro o fuera de la clase 
    
    //  atributo PROTECTED
    // Pueden ser accedidos desde dentro de la clase y otras clases que heredaron, Pero no fue de estas
    
    // atributo PRIVATE
    // Solo pueden ser accedidos desde dentro de la clase en la que fueron creados
    // Es decir que no podemos acceder a ellos desde otra clase que heredo y 
    // tampoco se puede acceder desde afuera de la clase

    class Persona{
        public $nombre;
        public $edad;
        public $nacionalidad;

        function __construct($nom, $ed, $nac){
            $this -> nombre = $nom;
            $this -> edad = $ed;
            $this -> nacionalidad = $nac;
        }
        public function imprimir(){

            return ' Su nombre es: ' . $this -> nombre . ' tiene : ' . $this -> edad . 
            ' años y es: ' . $this -> nacionalidad;
            
        }   
    }

    class Estudiante extends Persona{

        /**Forma ideal de declarar el constructor */
        function __construct($nombre, $edad, $pais, $carrera){
            parent:: __construct($nombre, $edad, $pais); /**Trae del padre esas propiedades */
            $this -> carrera = $carrera;

        }
        
        
        
        /** El constructor se puede sobreescribir de esta forma */
        /*
        function __construct($nom, $ed, $nac, $carr){
            $this -> nombre = $nom;
            $this -> edad = $ed;
            $this -> nacionalidad = $nac;
            $this -> carrera = $carr;
        }
        */
    } 

    // Clase estudiante
    $estudiante1 = new Estudiante('Sarahi Martines', 24, 'colombiana', 'Programacion');
    echo '<br />';
    echo $estudiante1 -> imprimir();

    // Clase persona
    // $perona2 = new Persona('Yazmin Santiago', 24, 'Mexicana');
    // echo '<br />';
    // echo $perona2 -> imprimir();
?>
