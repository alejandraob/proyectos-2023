<?php
namespace Animal\Perro;
include "nameSpaceLlamarPerro.php";
const NOMBRE= "Perro \n";

function comer(){
    print "estoy comiendo, perro \n";
}
class Pasear{
    static function paseo(){
        print "estoy paseando, perro \n";
    }
}

print "-----------------NO CUALIFICADO--------------------------\n";
//Nombre no cualificado
comer();
Pasear::paseo();
print NOMBRE;

print "----------------CUALIFICADO--------------------------\n";
//Nombre cualificado
salchicha\comer();
salchicha\Pasear::paseo();
print salchicha\NOMBRE;

print "-----------------COMPLETAMENTE CUALIFICADO--------------------------\n";
//Nombre completamente cualificado
\Animal\Perro\salchicha\comer();
\Animal\Perro\salchicha\Pasear::paseo();
print \Animal\Perro\salchicha\NOMBRE;