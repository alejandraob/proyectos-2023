<?php
/* 
#Dos instancias de una clase son iguales si tienen los mismos atributos y valores(los valores se comparan con el operador de igualdad ==)
#Cuando se utiliza el operador de identidad(===), las variables de un objeto son las identicas dí y sólo si hacen referencia a la 
misma instancia de la misma clase
*/

class Gato{
    public $bandera;
}
class Perro{
    public $bandera;
}
$gato1= new Gato();
$gato2= new Gato();
$gato3= $gato1;
$perro1= new Perro();

echo "comparamos elementos de la misma clase \n";

echo "comparacion de igualdad ==    ----  gato1==gato2 =>";
echo ($gato1==$gato2)?"Verdadero \n":"Falso \n";

echo "comparacion de desigualdad !=    ----  gato1!=gato2 =>";
echo ($gato1!=$gato2)?"Verdadero \n":"Falso \n";

echo "comparacion de igualdad estricta ===    ----  gato1===gato2 =>";
echo ($gato1===$gato2)?"Verdadero \n":"Falso \n";

echo "comparacion de desigualdad !==    ----  gato1!==gato2 =>";
echo ($gato1!==$gato2)?"Verdadero \n":"Falso \n";


echo "comparamos elementos de la misma refencia \n";

echo "comparacion de igualdad ==    ----  gato1==gato3 =>";
echo ($gato1==$gato3)?"Verdadero \n":"Falso \n";

echo "comparacion de desigualdad !=    ----  gato1!=gato3 =>";
echo ($gato1!=$gato3)?"Verdadero \n":"Falso \n";

echo "comparacion de igualdad estricta ===    ----  gato1===gato3 =>";
echo ($gato1===$gato3)?"Verdadero \n":"Falso \n";

echo "comparacion de desigualdad !==    ----  gato1!==gato3 =>";
echo ($gato1!==$gato3)?"Verdadero \n":"Falso \n";


echo "comparamos elementos de diferente clase \n";

echo "comparacion de igualdad ==    ----  gato1==perro1 =>";
echo ($gato1==$perro1)?"Verdadero \n":"Falso \n";

echo "comparacion de desigualdad !=    ----  gato1!=perro1 =>";
echo ($gato1!=$perro1)?"Verdadero \n":"Falso \n";

echo "comparacion de igualdad estricta ===    ----  gato1===perro1 =>";
echo ($gato1===$perro1)?"Verdadero \n":"Falso \n";

echo "comparacion de desigualdad !==    ----  gato1!==perro1 =>";
echo ($gato1!==$perro1)?"Verdadero \n":"Falso \n";