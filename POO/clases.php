<?php
    
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

            echo ' Su nombre es: ' . $this -> nombre . ' tiene : ' . $this -> edad . 
            ' años y es: ' . $this -> nacionalidad;
            
        }


        
    }

    // Declaracion sin constructor
    // persona es una instancia de persona
    // $persona1 = new Persona;

    //$persona1 -> nombre = 'karina Santiago';
    //$persona1 -> edad = 21;
    //$persona1 -> nacionalidad = 'Mexicana';

    //$persona1 -> imprimir();


    $perona2 = new Persona('Yazmin Santiago', 24, 'México');
    echo '<br />';
    $perona2 -> imprimir();




    
?>