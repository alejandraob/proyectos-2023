<?php
include_once "Cliente.php";
include_once "Bicicleta.php";
include_once "BicicletaNacional.php";
include_once "BicicletaInternacional.php";
include_once "Empresa.php";
include_once "Venta.php";
include_once "VentaLocal.php";
include_once "VentaOnline.php";

// Creación de instancias y prueba del sistema

$objCliente1 = new Cliente("Juan", "Pérez", false, "DNI", "12345678");
$objCliente2 = new Cliente("María", "Gómez", false, "DNI", "23456789");

$objBici1 = new BicicletaNacional(11, 89500, 2022, "Fire Bird Plegable Cuadro Acero", 0.85, true,11);
$objBici2 = new BicicletaNacional(12, 310000, 2021, "Bicicleta Trek Marlin 5 Rodado 29 Talle L", 0.70, true,12);
$objBici3 = new Bicicleta(13, 10000, 2023, "Bicicleta Topmega Fixie Streeter R28 Acero 1vel Azul Osc T54", 0.55, false);
$objBici4 = new BicicletaInternacional(14, 12499900, 2020, "Bicicleta Vairo Xr 3.8 D 29", 100, true,"EEUU",6244400);

$mediopago1="efectivo";
$mediopago2="tarjeta";
$mediopago3="mercadoPago";
$mediopago4="cheque";
$mediopago5="credito";
$mediopago6="debito";
$mediopago7="transferencia";



$objEmpresa = new Empresa("Alta Gama", "Av Argetina 123", array($objBici1, $objBici2, $objBici3, $objBici4), array($objCliente1, $objCliente2));
$ventasCliente1=$objEmpresa->registrarVenta(array(11,12,13,14),$objCliente2);
echo "Precio final de la venta 1: $".$ventasCliente1."\n";
echo "\n";
$ventasCliente2=$objEmpresa->registrarVenta(array(0,14),$objCliente2);
echo "Precio final de la venta 2: $".$ventasCliente2."\n";
echo "\n";
$ventasCliente3=$objEmpresa->registrarVenta(array(2,14),$objCliente2);
echo "Precio final de la venta 3: $".$ventasCliente3."\n";
echo "\n";
$ventasImportadas=$objEmpresa->informarVentasImportadas();
echo "Precio final de la venta 4: $".$ventasImportadas."\n";
echo "\n";
$sumaVentasNacionales=$objEmpresa->informarSumaVentasNacionales();
echo "Precio final de la venta 5: $".$sumaVentasNacionales."\n";
echo "\n";
echo $objEmpresa;

/*
3. Se crea un objeto Empresa con la siguiente información: denominación =” Alta Gama”, dirección= “Av Argenetina
123”, colección de bicicletas= [$obBici1, $obBici2, $obBici3, $obBici4] , colección de clientes = [$objCliente1,
$objCliente2 ], la colección de ventas realizadas=[].
4. Invocar al método registrarVenta($colCodigosBici, $objCliente,$tipo, $info) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el punto 1) y la
colección de códigos de bicicletas es la siguiente [11,12,13,14], la variable $tipo=’on-line’ y para el arreglo
asociativo $info asigne valores a elección. Visualizar el resultado obtenido..
5. Invocar al método registrarVenta($colCodigosBicicletas, $objCliente,$tipo, $info) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el punto 1) y la
colección de códigos de bicicletas es la siguiente [0,14] , la variable $tipo=’local’ y para el arreglo asociativo $info
asigne valores a elección. Visualizar el resultado obtenido.
6. Invocar al método registrarVenta($colCodigosBicicletas, $objCliente,$tipo, $info) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el punto 1) y la
colección de códigos de bicicletas es la siguiente [2,14] , la variable $tipo=’local’ y para el arreglo asociativo $info
asigne valores a elección. Visualizar el resultado obtenido.
7. Invocar al método retornarVentasOnline() y visualizar el resultado.
8. Invocar al método retornarImporteVentasEnLocal() y visualizar el resultado.
9. Realizar un echo de la variable Empresa creada en 3. */


$vta=$objEmpresa->registrarVenta(array(11,12,13,14),$objCliente2,$tipo="online",$info=array('Tarjeta Debito','alemania 359','3665558','299123456',360));
echo "Precio final de la venta 1: $".$vta."\n";
echo "\n";
$vta=$objEmpresa->registrarVenta(array(0,14),$objCliente2,$tipo="local",$info=array('Tranferencia','2023-06-25 18:30',true));
echo "Precio final de la venta 2: $".$vta."\n";
echo "\n";
$vta=$objEmpresa->registrarVenta(array(2,14),$objCliente2,$tipo="local",$info=array('Tarjeta Credito','2023-06-16 10:00',false ));
echo "Precio final de la venta 3: $".$vta."\n";
echo "\n";
$mostrar=$objEmpresa->retornarVentasOnline();
echo "Ventas Online: ".$mostrar."\n";
echo "\n";
$mostrar=$objEmpresa->retornarImporteVentasEnLocal();
echo "Importes locales: ".$mostrar."\n";
echo "\n";

echo $objEmpresa;



?>