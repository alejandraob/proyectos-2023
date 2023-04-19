<?php
class Gato{
    var $nombre;
    var $colorPelo;
    var $corbata="SI";

    function __construct($nombre="",$pelo="negro")
    {
        $this->nombre=$nombre;
        $this->colorPelo=$pelo;
    }
  function __destruct()
    {
        print $this->nombre." dice: 'Adios mundo cruel'\n";
    }
    function maullar(){
        return "miua, miua";

    }
    function tieneCorbata(){
        return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo es ".$this->colorPelo."\n";
    }
    function saludo(){
        $cadena="Hola, me llamo ".$this->nombre." y mi color de pero es ";
        $cadena.=$this->colorPelo;
        return $cadena;
    }
}

class GatoVolador extends Gato{

}

$cucho= new Gato("Cucho","rosa");
$benito= new GatoVolador("Benito","Azul");

print $cucho->saludo()."\n";
print $benito->saludo()."\n";

echo "El pariente de la clase Gato es ".get_parent_class("Gato")."\n";
echo "El pariente de la clase GatoVolador es ".get_parent_class("GatoVolador")."\n";

echo is_subclass_of("Gato", "GatoVolador")?"SI":"NO \n";
echo is_subclass_of("GatoVolador", "Gato")?"SI":"NO \n";

print $cucho->maullar()."\n";
print $benito->maullar()."\n";

$cucho."\n";
$benito."\n";
?>