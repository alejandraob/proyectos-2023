<?php

$tiendaCafe=[
    "Americano"=>36,
    "Mocca"=>40,
    "recalentado"=>5,
    "Capuccino"=>40,
    "Latte"=>30
];

foreach($tiendaCafe as $price){
    echo "el cafe cuesta $$price \n";
}

echo "\n";

foreach($tiendaCafe as $cafe=> $price){
    echo "el $cafe cuesta $$price \n";
}

echo "\n";

foreach($tiendaCafe as $cafe=> $price){
   echo "acutalmente mi puntero esta en $cafe \n";
   if($cafe=="Mocca"){
    echo "Encontramos el $cafe cuesta $$price \n";
    break;
   }
}

echo "\n";

foreach($tiendaCafe as $cafe=> $price){
   // echo "acutalmente mi puntero esta en $cafe \n";
    if($cafe=="recalentado"){
    continue;
    }
    echo "El $cafe esta muy rico!\n";
 }
 
 echo "\n";

?>