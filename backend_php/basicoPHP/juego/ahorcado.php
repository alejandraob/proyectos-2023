<?php
/*
Esta igual la huevada pero no se porque no me funciona, no me muestra la cantidad de lineas correctas, y no me reconoce la letra aunque son correctas.
*/

function clear(){
    if(PHP_OS === "WINNT"){
        system("cls");
    }else{
        system("clear");
    }
}

$possible_words=["Bebidas","Primate","Ala","Dolor","Juegos","Mama","Ratoncito","Piloto","Baldosa","Terremoto","Paramericana"];

define("MAX_ATTEMPS",6);

echo "Juego del ahoracado \n";

//Inicalizamos el juego

//ponemos un rand par elegir un indice aleatorio
$choosen_word=$possible_words[rand(0,10)];

//strtolower nos convierte todo en minuscula
$choosen_word=strtolower($choosen_word);

//strlen nos da el tamaño de la palabra
$word_length=strlen($choosen_word);

//str_pad Rellena un string hasta una longitud determinada con otro string
$discovered_letters= str_pad("",$word_length," _ ");

$attempts=0;

do{
echo "Palabra de $word_length letras \n\n";

echo $discovered_letters."\n\n";

//Pedimos al usuario que escriba

$player_letter=readline("Escribe una letra: ")."\n\n";

$player_letter=strtolower($player_letter);

//str_contains nos verifica si existe en el string
if(str_contains($choosen_word,$player_letter)){
    //verificamos todas las ocurrencias para remplazarla
    //strpos encuanta la posicion de la primera ocurrencia de un subtring en un string
    $offset=0;
    while(
        ($letter_position=strpos($choosen_word,$letter_position,$offset))!==false){
        $discovered_letters[$letter_position]=$player_letter;
        $offset=$letter_position+1;
    }
}else{
    clear();
    $attempts++;
    echo "Letra incorracta. Te quedan ". (MAX_ATTEMPS-$attempts)." intentos \n\n";
    sleep(2);
}
clear();
}while($attempts<MAX_ATTEMPS && $discovered_letters!=$choosen_word);
clear();
if($attempts<MAX_ATTEMPS){
    echo "Felicidades! adivinaste \n\n";
}else{
    echo "Suerte para la proxima  \n\n";
}
echo "La palabra era: ".$choosen_word."\n\n";




