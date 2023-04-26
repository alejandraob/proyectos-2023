<?php
/*
# Las interfaces nos permiten crear codigos con el cual especificar que metodos deben ser implementados por una clase (prototipos), sin 
definir su implementacion
#Las interfaces se definen con la palabra reservada interface
#los métodos declarados en una interfaz deben ser publicos
#Para implementar una interfaz desde una clase se utiliza la palabra resevada implements
#una clase puede implementar más de una interface si se desea
#las interfaces se escribe su nombre con una i minuscula para diferenciarlas de las clases
*/

use Gato as GlobalGato;

interface iMamifero{
    public function andar();
    public function decir();
}

class Gato implements iMamifero{
    public function andar(){
        return "camina";
    }
    public function decir()
    {
        return "miau, miau";
    }
}
class Delfin implements iMamifero{
    public function andar(){
        return "nadar";
    }
    public function decir()
    {
        return "iiii...iiiiii..iii";
    }
}
class Murcielago implements iMamifero{
    public function andar(){
        return "vuela";
    }
    public function decir()
    {
        return "chiiii...chiiiii...chiiii";
    }
}

$gato=new Gato();
$delfin= new Delfin();
$murcielago= new Murcielago();

print "El gato anda ".$gato->andar(). " mientras dice ". $gato->decir()." \n";
print "El murcielago anda ".$murcielago->andar(). " mientras dice ". $murcielago->decir()." \n";
print "El delfin anda ".$delfin->andar(). " mientras dice ". $delfin->decir()." \n";