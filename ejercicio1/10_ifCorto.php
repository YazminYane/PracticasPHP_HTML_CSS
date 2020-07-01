<?php

#Se suele usar para las variables
$edad = (isset($edad)) ? $edad : "El usuario no establecio su edad";

#isset: devuelve un true o falsa e identifica si la variable tiene un valor 
echo 'edad: ' . $edad;

?>