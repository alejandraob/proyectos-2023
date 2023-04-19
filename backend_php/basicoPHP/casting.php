<?php
///Casting es cuando forzamos que un tipo de dato se convierta en otro tipo de dato.
//$numerito_string = "5"; // Esto es un string
//$numerito_int = (int) $numerito_string; // Esto es un integer
//echo "\n"; 
/*
Casting de float a integer
Aquí lo que hace el casting no es redondear el número, sino quitarle la parte decimal:
*/
//$dias = 5.89; // Esto es un float
//$dias = (int) $dias; // Esto es un integer

//var_dump( $dias ); // Detalles de la variable
//echo "\n"; // Salto de línea
/*Casting de un tipo de dato a boolean
Toda variable que sea de valor 0 o vacío ("") tendrá el valor de false, de lo contrario para cualquier otro caso será true */
$banderita = 0; // Integer. Puede ser "" e igual será false
$banderita = (bool) $banderita; // Casting de integer a boolean

var_dump($banderita); // Detalles de la variable
echo "\n"; // Salto de línea

/*
Mensaje en la consola/navegador: 
bool(false)
*/
$banderita = 55; // Integer. Puder ser cualquier numero o String e igual será true
$banderita = (bool) $banderita; // Casting de  a boolean

var_dump($banderita); // Detalles de la variable
echo "\n"; // Salto de línea

/*
Mensaje en la consola/navegador: 
bool(true)
*/
?>