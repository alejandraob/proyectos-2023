<?php
namespace miNameSpace\miSubNameSpace;

function fopen($archivo){
//$f=\fopen($archivo);
  //  return $f;
}

class Exception extends \Exception{}

$e= new Exception("HOLA");
$e2= new \Exception("HI! OTRA VEZ");
const E_ERROR=40;
print E_ERROR;
print \E_ERROR;