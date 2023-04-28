<?php
namespace miNamespace;
class MiClase{
    function __construct()
    {
        print "Hola desde la funcion constructora \n";
    }
}
function miFuncion(){
    print "Hola desde la funcion \n";
}

const miConstante="hola";

//dinamica
$a="\miNamespace\miClase";
$clase = new $a;
$b="\miNamespace\miFuncion";
$b();
print constant("\miNamespace\miConstante");