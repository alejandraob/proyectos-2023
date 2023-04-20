<?php

$gatitos = [
    "Michi" => [
        "Ocupacion" => "Casador de ratas",
        "color" => "Gris",
        "comidas" => [
            "comida_favorita" => "Atun, pollito",
            "comida_no_favorita" => "pelet, lengua"
        ]
    ],
    "Luna" => [
        "Ocupacion" => "arañadora de pared",
        "color" => "blanca",
        "comidas" => [
            "comida_favorita" => "pollito",
            "comida_no_favorita" => "higado,fresas"
        ]
    ],
    "Negro" => [
        "Ocupacion" => "dormilon",
        "color" => "negro",
        "comidas" => [
            "comida_favorita" => "Lasaña",
            "comida_no_favorita" => "pelet,gusanos"
        ]
    ]
];


echo "Comidas Favoritas de Negro ". $gatitos["Negro"]["comidas"]["comida_favorita"]."\n";
echo "El color de Luna es ". $gatitos["Luna"]["color"]."\n";

?>