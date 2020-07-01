<?php 

# La palabra static nos permite acceder a atributos y metodos sin instansear 

#------------------------------------------------------------------------------------------------
#----------------                             SIN STATIC               --------------------------
#------------------------------------------------------------------------------------------------

class Persona {

    public $dia = '7 de septiembre';

    public function saludo($nombre){

        if($nombre){
            return 'Hola, buen día ' . $nombre;
        }else{
            return 'Hola, buen día ';

        }
    }
}

// Accede a un metodo con statisc 
$carlos = new Persona;
echo $carlos -> dia . '<br />' ;
echo $carlos -> saludo('Carlos');

#------------------------------------------------------------------------------------------------
#----------------                             CON STATIC               --------------------------
#------------------------------------------------------------------------------------------------

class PersonStatic {

    public static $diaa = '7 de septiembre';

    public static function saludo2($nombree = null){

        if($nombree){
            return 'Hola, buen día ' . $nombree;
        }else{
            return 'Hola, buen día ';

        }
    }
}

// Accede a un metodo con statisc sin instancia
echo '<br />' ;
echo PersonStatic::$diaa;
echo '<br />' ;
echo PersonStatic::saludo2();
 

?>