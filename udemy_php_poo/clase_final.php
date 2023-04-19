<?php
//final no pueden ser sobreescritas en las clases heredadas

class Mamifero{
  final  public const CLASE="Mamifero";
}

class Felino extends Mamifero{
  final  public const FAMILIA="Felino";

}
class Gato extends Felino{
    public const ESPECIE="Gato";
  //  public const FAMILIA="Perro"; //poner final nos permite a que no podamos redefinir atributos padres

}

$cucho =new gato();

print $cucho::FAMILIA."\n ";



?>