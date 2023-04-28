<?php
class A{
    private $val;
    public function __construct($valor)
    {
        $this->val=$valor;
    }

    function getClosure()
    {
        return function(){
            return $this->val;
        };
    }

}

$ob1= new A(1);
$ob2= new A(5);

$c1=$ob1->getClosure();
print "Retorno la informacion del primer objeto instanciado ".$c1()."\n";
$c1=$c1->bindTo($ob2);
print "Retorno la informacion del segundo objeto instanciado ".$c1()."\n";

?>