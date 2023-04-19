<?php
class Gato{
    protected $nombre;
    private $colorPelo;
    private $corbata="SI";

    public function __construct($nombre="",$pelo="negro")
    {
        $this->nombre=$nombre;
        $this->colorPelo=$pelo;
    }

    public function maullar(){
        return "miua, miua";

    }
    public function tieneCorbata(){
        return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo es ".$this->colorPelo."\n";
    }
    public function saludo(){
        $cadena="Hola, me llamo ".$this->nombre." y mi color de pero es ";
        $cadena.=$this->colorPelo;
        return $cadena;
    }

    public  function __destruct()
    {
        print $this->nombre." dice: 'Adios mundo cruel'\n";
    }

    public function setCorbata($c="SI"){
        if($c!="SI"){
            $corbata="NO";
        }
        $this->corbata=$c;
    }
    public function getCorbata(){
        return $this->corbata;
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
///Antes del cambio
print $cucho->tieneCorbata()."\n";
print $benito->tieneCorbata()."\n";
///Despues del cambio
$cucho->setCorbata("NO");
print $cucho->tieneCorbata()."\n";
print $benito->tieneCorbata()."\n";
echo $cucho->getCorbata()."\n";

?>