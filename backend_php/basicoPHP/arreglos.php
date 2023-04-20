<?php

//$edades=[20,18,40];
//$edades= array(20,18,40);
//para acceder al sub indice 
//echo "Una de las edades esta dentro es ". $edades[1]."\n";
////////////////////////////////ARREGLOS ASOCIATIVOS //////////////////////////////////////////////
$edades= array(
    "Carlos"=>20,
    "Michi"=>18,
    "Juan"=>40
);

echo "la edad de Michi es ". $edades["Michi"]."\n";

$cafes=array(
    "Capuccino"=>50,
    "Latte"=>49,
    "Americano"=>70
);

echo "El precio del cafe americano es de {$cafes['Americano']} \n";

$personas = [
    "Carlos"=>[
        "edad"=>20,
        "apellido"=>"Gomez",

    ],
    "Michi"=>[
        "edad"=>18,
        "apellido"=>"Michisancio",

    ],
];

echo "La informacion de Michi es:  Edad: ".$personas["Michi"]["edad"]."\n";

?>