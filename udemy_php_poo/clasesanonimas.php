<?php 
/* 
Las clases anónimas se definen sólo en la version 7 y superiores
las clases anónimas son útiles para definir objetos sencillos y desechables
*/
$gato= new Class("Don Gato"){
    private $nombre;
    function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return "Mi nombre es ".$this->nombre." y soy un gato \n";
    }
}; //este tipo de clases requieren ser finalizadas con el (;) punto y coma

print $gato->getNombre();
