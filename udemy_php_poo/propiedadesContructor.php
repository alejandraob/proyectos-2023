<?php
////propiedades de constructor
///Antes de php 8.0
/*class Punto{

    public float $x;
    public float $y;
    public float $z;
    function __construct(
        float $x=0,
        float $y=0, 
        float $z=0,  
    )
    {
        $this->x=$x;
        $this->y=$y;
        $this->z=$z;
    }
}
*/
///Apartir de php 8.0 +
class Punto{
    function __construct(
       public float $x=0,
       public float $y=0, 
       public float $z=0,  
    )
    {
      print "Valor de X=". $this->x." , Valor de Y= ".$this->y." , Valor de Z= ".$this->z;
    }
}

$punto = new Punto(3.6, 4.5, 9.6);

?>