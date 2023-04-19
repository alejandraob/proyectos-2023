<?php
class Gatos{
    public readonly string $nombre;
    function __construct($nombre)
    {
        $this->nombre=$nombre;
    }

}

$cucho=new Gatos("cucho");
print "Mi nombre es ".$cucho->nombre."\n";
//$cucho->nombre ="demostenes";  //No se puede cambiar elementos que estan como solo lectura
print "Ahora mi nombre es ".$cucho->nombre."\n";

?>