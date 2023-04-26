<?php
/*
#La palabra reservada FINAL evitamos que la clase derivada sobreescriba un método
#una clase también puede ser final y no se permitiría que se extendiera o heredara a otra clase
*/

use GatoVolador as GlobalGatoVolador;

class Gato{
    public function ronronear(){
        return "ronronear";
        }
    final function maullar(){
        return "miau, miau";
    }
}

class GatoVolador extends Gato{
   /*dejarlo asi nos daria un error fatal porque no se puede sobreescribir, el metodo padre 
    tiene la palabra reservada final, impidiendo el cambio... ademas el editor de codigo ya marca error!
    public function maullar(){
        return "miuaaaaaa.....miauuu";
    }*/

    public function ronronear()
    {
        return "ron, ron, ron";
    }
}
$gatoVolador= new GlobalGatoVolador();
print "Maullar: ".$gatoVolador->maullar()."\n";
print "Ronronear: ".$gatoVolador->ronronear()."\n";