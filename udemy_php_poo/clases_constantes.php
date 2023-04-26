<?php 
/* 
Las constantes de diferencias de las variables en que no es necesario el simbolo de peso o dolar para definirlas. 
Por omision, las variables de las clases son publicas
El valor de una constante no puede ser variable, funcion o expresion
El valor de la constante es la misma que para todas las instancias, no se pueden modificar
*/

use Gato as GlobalGato;

class Gato{
    const EDAD=18;

    function edadGatuna(){
       // return EDAD;
       return self::EDAD;
    }

}
/* En este caso llamarlo asi nos produce un error, teniendo solo return edad
$benito= new Gato();
print "la edad maxima de los gatos es ". $benito->edadGatuna()."\n";
*/

//Para utilizar desde una instancia, debebemos utilizar en el function return self::nombre_constante
$benito= new Gato();
print "la edad maxima de los gatos es ". $benito->edadGatuna()."\n";



///Esta es la forma se puede saber el dato
print "la edad maxima de los gatos es ". Gato::EDAD ."\n";



?>