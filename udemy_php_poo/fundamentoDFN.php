<?php
interface A {}
interface B {}
interface C extends A {}
interface D {}

class W implements A {}
class X implements B {}
class Y implements A, B {}
class Z extends Y implements C {}

//Acepto un objeto que implenta tanto A como B
// O un objeto que implementa D

function prueba1(): (A & B) | D {
     // Lógica de la función
     echo "Hola";
}

//Acepto un objeto que implenta C
// O un hijo de Xque tambien implementa D
// o nulo 

function prueba2(): C | (X & D) | null {
     // Lógica de la función
     echo "Chau";
}



?>