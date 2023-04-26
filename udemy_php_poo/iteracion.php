<?php

class Gato{
    public $peso="publico"; //10
    private $genero="private"; //M
    protected $edad="protected"; //8

    function iteracion(){
        //iteracion dentro de la clase
        print "iteracion dentro de la clase \n";
        foreach($this as $clave=>$valor){
            print $clave." -> ".$valor."\n";
        }
    }
}
$gato= new Gato();

$gato->iteracion();

        //iteracion Fuera de la clase
        print "\n iteracion fuera de la clase \n";
        foreach($gato as $clave=>$valor){
            print $clave." -> ".$valor."\n";
        }