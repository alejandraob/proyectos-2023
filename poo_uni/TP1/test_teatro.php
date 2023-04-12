<?php
require_once "Teatro.php";
$funcion=[["nombreFuncion"=>"Dracula", "precio"=>5000]];



$teatro= new Teatro("REX", "Av. 9 de Julio 111", $funcion);


$nombre1="El fantasma de La Opera"; $precio1=3600;
$nombre2="Una noche de Verano"; $precio2=4600;
$nombre3="Cat"; $precio2=3000;
$nombre4="Casados con Hijos"; $precio4=3500;

$agregar = [
    "nombreFuncion" => $nombre2,
    "precio" => $precio2,
];

echo $teatro->cargarFunciones($agregar);

echo $teatro;


?>