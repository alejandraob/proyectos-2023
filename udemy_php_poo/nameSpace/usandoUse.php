<?php
require "use.php";

//use Animales\Mamiferos as mascota;
//use Animales\Mamiferos\Perro as MiPerro;
use Animales\Mamiferos\{Perro as MiPerro, Gato}; //se puede hacer lo mismo para funciones y constantes ---Este tipo de agrupacion es de PHP 7
use function Animales\Mamiferos\ladrar as ladrar;
use const Animales\Mamiferos\PERRO as DOG;



print "////////////// CLASES DEL ESPACIO DE NOMBRES /////////////////\n";
//$perro= new Animales\Mamiferos\Perro;
//$perro= new mascota\Perro;
$perro= new MiPerro;
$gato= new Animales\Mamiferos\Gato;
print "////////////// FUNCIONES DEL ESPACIO DE NOMBRES /////////////////\n";
//Animales\Mamiferos\ladrar();
ladrar();
Animales\Mamiferos\maullar();
print "////////////// CONSTANTES DEL ESPACIO DE NOMBRES /////////////////\n";
//print Animales\Mamiferos\PERRO."\n";
print DOG."\n";
print Animales\Mamiferos\GATO."\n";
