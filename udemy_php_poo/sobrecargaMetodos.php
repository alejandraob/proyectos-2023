<?php
/*
# __call(string $name, array $arguments): mixed
__call() es lanzado al invocar un método inaccesible en un contexto de objeto

 generamos metodos y atibutos dinamicos
*/

class Gato{
    private $nombre;
    private $pelo;

    public function __construct($nombre, $color)
    {
        $this->nombre=$nombre;
        $this->pelo=$color;
    }

    public function __toString()
    {
        return "Mi nombre es ".$this->nombre." y el color de mi pelo es ".$this->pelo."\n";
    }

    public function __call($name, $argumentos){
        return $this->$name;
    }

}

$benito= new Gato("Benito", "azul");
print $benito;
print $benito->nombre();
