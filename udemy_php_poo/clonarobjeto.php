<?php
////usamos la palabra reservada clone

class Gato{
    const EDAD=18;
    public static $claveSecreta="12345";
    protected $nombre;
    private $colorPelo;
    private $corbata="SI";

    public function __construct($nombre="",$pelo="negro")
    {
        $this->nombre=$nombre;
        $this->colorPelo=$pelo;
    }

//aprendiendo a usarlo
   public function __set($name, $valor){
    print "la propiedad ".$name." se acutualizo a ".$valor."\n";
        $this->$name=$valor;
    }
    public function __get($name){
        return $this->$name;
    }

    public function maullar(){
        self::mensajeSecreto2();
        return "miua, miua ".self::$claveSecreta;

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

    public function setNombre($nombre){

        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }


    public static function mensajeSecreto(){
        return "quien te dijo que leas esto? \n";
    }
    public static function mensajeSecreto2(){
        print "quien te dijo que leas esto? \n";
    }


}


class GatoVolador extends Gato{
    function maullar()
    {
        print parent::maullar()."\n";
        return "miau, miau, miau y miau";
    }


}

$cucho= new Gato("Cucho","rosa");
$benito= new GatoVolador("Benito","Azul");
///Copiado por valor
$a=10;
$b=$a;

//copiado por referencia
/*$panza=$cucho;
$panza->setNombre("panza");
$panza->setCorbata("SI");
print $panza->tieneCorbata();
print $cucho->tieneCorbata();*/

//Clonado
$panza= clone $cucho;
$panza->setNombre("panza");
$panza->setCorbata("NO");
print $panza->tieneCorbata();
print $cucho->tieneCorbata();


?>