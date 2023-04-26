<?php
/*
A partir de la version 5.0.0 de php podemos hacer autocargas para evitar las sentencias de require e include
la funcion spl_autoload_registrer() podemos autocargar las clases que llamemos en nuestro programa
la funcion spl_autoload() se considera obsoleta

spl_autoload_registrer(function($nombre_clase){
    include $nombre_clase.'.php';
});

*/
 spl_autoload_register(function($clase){
    require_once "udemy_php_poo/".$clase.".php";
 });
