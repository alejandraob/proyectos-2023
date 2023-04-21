<?php
include_once("Viaje.php");
include_once("Responsable.php");
include_once("Terminal.php");
include_once("Empresa.php");


$empresas=[
    new Empresa("1","Via Bariloche",[]),
    new Empresa("2", "Andesmar", [])
];

//Intanciamos Responsable
$responsable1= new Responsable("Alejandro","Romero","36478159","Stgo. del Estero 5","aromero@homtail.com",49158883);
$responsable2= new Responsable("Samuel","Quintero","39369147","Mendoza 655","quintero@gmail.com",48925554);
$responsable3= new Responsable("Mariela","Santana","45893247","Roma 447","santanaM@homtail.com",49666358);
$responsable4= new Responsable("Sergio","Ruffo","26321459","Av. San Martin 210","ruffo@gmail.com",4147523);

///Intanciamos los viajes y son guardados en un array
$viajes1=[
$destinos1= new Viaje("Bariloche","10:00","17:00",2850,"23/04/2023","10",$responsable1),
$destinos2= new Viaje("Mendoza","10:00","17:00",5800,"22/04/2023","15",$responsable2)
];

$viajes2=[
$destinos3= new Viaje("Buenos Aires","08:00","14:00",3600,"22/04/2023","8",$responsable3),
$destinos4= new Viaje("Bariloche","06:00","13:30",2850,"23/04/2023","10",$responsable4)
];
///ahora lo pasamos a empres
$empresas[0]->setViajes($viajes1);
$empresas[1]->setViajes($viajes2);


///
echo $destinos1;
echo $responsable1;
print_r ($viajes1);
print_r($empresas);

