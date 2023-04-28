<?php
class Valor{
    protected $valor;
    public function __construct($valor)
    {
        $this->valor=$valor;
    }
    public function getValor(){
        return $this->valor;
    }

}

$tres= new Valor(3);
$cinco= new Valor(5);

$cierre= function ($numero){ 
    var_dump(
        $this->getValor()+$numero
    );
};


$cierre->call($tres,10);
$cierre->call($cinco,10);


?>