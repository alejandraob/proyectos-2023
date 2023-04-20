<?php

$edades=[18,22,40,34,25];

//Palabra reservada count para saber cuantos elementos tengo en un arreglo

//echo count($edades)."\n";

//array_push nos permite agregar valores a nuestro arreglo

//array_push($edades,13);

//var_dump($edades)."\n";

//is_array es para ver o definir si la variable es un arreglo
$estoNoEsArray="";
//var_dump(is_array($estoNoEsArray))."\n";
//var_dump(is_array($edades))."\n";

//Explode, convierte un string en un arreglo
//$listaDeFrutas="fresa,cereza,manzana";
//$listaDeFrutasArray=explode(",",$listaDeFrutas);
//var_dump($listaDeFrutasArray)."\n";

//Implode, convierte un arreglo en un string
$listaDeFrutasArray=["fresa","cereza","manzana"];
$listaDeFrutas= implode(",",$listaDeFrutasArray);
var_dump($listaDeFrutas)."\n";




?>