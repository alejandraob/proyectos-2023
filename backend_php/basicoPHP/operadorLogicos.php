<?php
/*Los operadores lógicos nos ayudan a combinar dos o más afirmaciones para definir si una oración es cierta o falsa. Su uso está basado en las tablas de verdad.

Estructura básica
En la mayoría de sus usos se necesitan al menos dos afirmaciones y un operador:

Ejemplo de una oración usando un operador lógico
Tipos de operadores lógicos
En programación, los tipos de operadores más usados son: AND (Y lógico), OR (O lógico) y NOT (Negación lógica).

Y (And)
Se utiliza para verificar si dos afirmaciones son ciertas. Si ambas afirmaciones son ciertas, entonces la oración completa es cierta. Si una de ellas es falsa, entonces la oración completa es falsa.

Operador Y (And) en PHP
En PHP para representar este operador podemos usar la palabra reservada and o && (doble ampersand)*/
// Las siguientes líneas son para visualización mas no para que las ejecutes en tu PC
# Opción 1:
//$valor_1 and $valor_2;
# Opción 2:
//$valor_1 && $valor_2;
/*
Tabla de verdad con el operador AND
Entonces si evaluamos 2 variables con el operador lógico Y (AND) podremos obtener estos posibles resultados dependiendo del valor que almacenen estas:

Valor 1	Valor Operador	Valor 2	Resultado
Verdadero	AND	Verdadero	Verdadero
Verdadero	AND	Falso	Falso
Falso	AND	Verdadero	Falso
Falso	AND	Falso	Falso
Este tipo de tablas son las conocidas tablas de verdad. Es importante saber que no es necesario memorizarlas, sino más bien aprender la forma en la que las generamos. Veamos unos ejemplos:

¿Los gatos son felinos AND tienen 4 patas? El resultado es Verdadero, pues ambas afirmaciones son <verdaderas class=""></verdaderas>*/

# Ejemplo en PHP
# ----------------
# Declaración de variables:
$gatos_felinos = true;
$gatos_tienen_4_patas = true;

var_dump( $gatos_felinos and $gatos_tienen_4_patas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(true)
//¿Los gatos son aves AND tienen 4 patas? Es Falso, pues, los gatos no son aves, por tanto, basta que una afirmación sea falsa para que el resultado sea Falso.
# ----------------
# Declaración de variables:
$gatos_aves = false;
$gatos_tienen_4_patas = true;

var_dump( $gatos_aves and $gatos_tienen_4_patas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(false)
/*
¿Los gatos vuelan AND programan con PHP? Es Falso, pues, los gatos no vuelan. Basta que una afirmación no sea verdad para decir que nuestro resultado será falso. Esto a pesar de que puede haber gatos muy cool que programen en PHP 😎 (¡Es broma! 😅).*/
# ----------------
# Declaración de variables:
$gatos_vuelan = false;
$gatos_programan_con_PHP = false;

var_dump( $gatos_vuelan and $gatos_programan_con_PHP ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(false)
/*
O (Or)
Se usa para verificar si al menos una afirmación es cierta. Si al menos una de ellas es cierta, entonces la oración es cierta, de lo contrario, es falsa.

Operador O (Or) en PHP
En PHP se puede representar usando or o también ||:// Las siguientes líneas son para visualización mas no para que las ejecutes en tu PC
# Opción 1:
$valor_1 or $valor_2
# Opción 2:
$valor_1 || $valor_2

Tabla de verdad con el operador OR
Si evaluamos 2 variables con el operador lógico O (OR) podremos obtener estos posibles resultados dependiendo del valor que almacenen estas:

Valor 1	Valor Operador	Valor 2	Resultado
Verdadero	OR	Verdadero	Verdadero
Verdadero	OR	Falso	Verdadero
Falso	OR	Verdadero	Verdadero
Falso	OR	Falso	Falso
Veamos unos ejemplos empleando este operador OR:

¿Los gatos son felinos OR tienen 4 patas? Es Verdadero, pues ambas afirmaciones son verdaderas.
*/
# ----------------
# Declaración de variables:
$gatos_felinos = true;
$gatos_tienen_4_patas = true;

var_dump( $gatos_felinos or $gatos_tienen_4_patas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(true)
//¿Los gatos son aves OR tienen 4 patas? Si bien es cierto que los gatos no son aves, sí tienen 4 patas, por tanto, al tener una afirmación verdadera, el resultado será Verdadero.
# ----------------
# Declaración de variables:
$gatos_aves = false;
$gatos_tienen_4_patas = true;

var_dump( $gatos_aves or $gatos_tienen_4_patas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(true)
//¿Los gatos vuelan OR tienen 6 colas? Al ser ambas afirmaciones falsas, el resultado esta evaluación es Falso.
# ----------------
# Declaración de variables:
$gatos_vuelan = false;
$gatos_tienen_6_colas = false;

var_dump( $gatos_vuelan or $gatos_tienen_6_colas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(false)
/*
No (Not)
Se emplea para invertir el valor de una afirmación. Por ejemplo, si una afirmación es verdadera, al negarlo el resultado será Falso, lo mismo pasa a la inversa.

Operador No (Not) en PHP
Usamos el signo de exclamación ! antes de la variable que queremos negar:

// La siguiente línea es para visualización mas no para que las ejecutes en tu PC
!$valor
Tabla de verdad con el operador NOT
Los posibles resultados de la tabla de verdad usando este operador serían:

Operador	Valor	Resultado
NOT	Verdadero	Falso
NOT	Falso	Verdadero
Comprobémoslo con unos ejemplos:

¿NOT los gatos son aves? La afirmación es falsa, pues los gatos no son aves, pero como tenemos el operador Not negando esto, el resultado cambia a ser Verdadero. Otra forma de leer esto sería: ¿Los gatos NO son aves? Y obtendremos el mismo resultado.
*/
# ----------------
# Declaración de variables:
$gatos_aves = false;

var_dump( !$gatos_aves ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(true)
//¿NOT los gatos tienen 4 patas? Los gatos Sí tienen 4 patas; sin embargo, tenemos al operador Not negando nuestra afirmación, por tanto, el resultado será Falso. Una vez más, otra forma de leer esto sería: ¿Los gatos NO tienen 4 patas?
# ----------------
# Declaración de variables:
$gatos_tienen_4_patas = true;

var_dump( !$gatos_tienen_4_patas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(false)