<?php
/*
#Por medios de los rasgos (traits) podemos reducir las limitaciones de la herencia simple (sólo se puede heredar una clase)
#Podemos reutilizar código (conjuntos de métodos) sobre clases independientes o a jeraquía de clase diferentes
#Un rasgo o trait es similar a las clases, pero solo agrupa métodos específicos
*/

interface iAnimal{
    public function nacer();
    public function crecer();
    public function reproducir();
    public function morir();
}

abstract class Vertebrado implements iAnimal{
    private $huesos;
    public function getHuesos(){ return $this->huesos; }
    public function nacer(){}
    public function crecer(){}
    public function reproducir(){}
    public function morir(){}
}
abstract class Invertebrado implements iAnimal{
    use Oviparo;
    private $hemocianina;
    public function getHemocianina(){ return $this->hemocianina; }
    public function nacer(){}
    public function crecer(){}
    public function reproducir(){}
    public function morir(){}
}
trait Oviparo{
    private $huevos;
    public function getHuevos(){ return $this->huevos; }
}

class Molusco extends Invertebrado{
    private $radura;
    public function getRadura(){ return $this->radura; }
}

class Reptil extends Vertebrado{ 
    use Oviparo;
    private $escamas;
    public function getEscamas(){ return $this->escamas; }
}

class Tortuga extends Reptil{
 
}
/* Esto seria un modelado de jeraruia de clases */
?>