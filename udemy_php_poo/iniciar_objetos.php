<?php
//Apartir de php 8.1 se puede iniciar un objeto con la palabra new
/*
class ManejarFecha{
    private $fecha;
    function __construct($fecha)
    {
        $this->fecha=$fecha;
    }

    public function formato(){
        return $this->fecha->format(format: 'd/m/Y');
    }
}
$fecha = new ManejarFecha(new DateTime());
print $fecha->formato();*/

class ManejarFecha{
    private $fecha;
   /* function __construct($fecha = null)
    {
        $this->fecha=$fecha ??new DateTime();
    }*/
    function __construct($fecha = new DateTime())
    {
        $this->fecha=$fecha;
    }

    public function formato(){
        return $this->fecha->format(format: 'd/m/Y');
    }
}
$fecha = new ManejarFecha();
print $fecha->formato();

?>