<?php
require_once "CuentaBancaria.php";
$cuenta= new CuentaBancaria(369852, 35492374, 693.36, 0.15);
echo $cuenta->depositar(-1);
//echo $cuenta->actualizarSaldo(850);
//echo $cuenta->retirar(3);
echo $cuenta;
?>