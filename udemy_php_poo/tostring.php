<?php
/*
    por medio de la función __toString() (método mágico) podemos tener una cadena como salida de una instancia de una clase
*/
//Seguimos con los ejemplos de gatos------

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
}

$benito= new Gato("Benito", "azul");
print $benito;
