<?php
/* 
 #Las clases abstractas no pueden ser instanciadas
 #Pueden declarar la existencia de los metodos, pero no su implementacion
 #Puede contener métodos no abstractos,  pero no debe contener al menos un método no abstracto
 #los métodos abstractos deben ser definidos en las clases heredadas, pero deben tener la misma visibilidad
 #la implementacion debe tener la misma firma: la declaracion de tipos y el numero de argumentos
 Las clases abstractas estan implementadas desde la version 5.4.0
*/

use Gato as GlobalGato;
use Mamifero as GlobalMamifero;

abstract class Mamifero{
    //Método abstracto
    abstract public function saludo();

    //Método no abstracto
    public function maullar(){
        return "miua, miua \n";
    }
}

class Gato extends Mamifero{
    public function saludo()
    {
        return "Hola mundo \n";
    }

}

$demostenes= new Gato();
/*Saludos no dara un error porque esta protegido- al cambiarlo a publico en la clase mamifero nos dara nuevmente error porque en la clase gato
esta protegido
*/
print "Saludo ".$demostenes->saludo();
print "Maullar ".$demostenes->maullar();

/* En simple palabras se utiliza las clases abstractas para proyectos muy grandes */