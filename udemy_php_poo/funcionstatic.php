<?php
///////Se usa modificador de acceso "static" y el operador de resolucion de ambito :: que permite acceder a elementos estaticos, constantes
/////y sobreescribir propiedades y metodos de una clase

class Gato{
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


    public static function mensajeSecreto(){
        return "quien te dijo que leas esto? \n";
    }


}


class GatoVolador extends Gato{

}
/*
$cucho= new Gato("Cucho","rosa");
$benito= new GatoVolador("Benito","Azul");*/

print "La clave secreta es: ".Gato::$claveSecreta."\n";
print "El mensaje es: ".Gato::mensajeSecreto()."\n";




?>