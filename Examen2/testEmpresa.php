<?php
include_once "Cliente.php";
include_once "Bicicleta.php";
include_once "BicicletaNacional.php";
include_once "BicicletaInternacional.php";
include_once "Empresa.php";
include_once "Venta.php";
/*
Implementar un script TestEmpresa en la cual:
Cree 2 instancias de la clase Cliente: $objCliente1, $objCliente2.***
Cree 3 objetos Bicicletas con la  información visualizada en la tabla: código, costo, año fabricación, descripción, porcentaje incremento anual, activo.***

Se crea un objeto Empresa con la siguiente información: denominación =” Alta Gama”, dirección= “Av Argenetina 123”,  colección de bicicletas= [$obBici1, $obBici2, $obBici3] , colección de clientes = [$objCliente1, $objCliente2 ], la colección de ventas realizadas=[].
Invocar al método  registrarVenta($colCodigosBici, $objCliente) de la Clase Empresa donde el $objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el punto 1) y la colección de códigos de bicicletas es la siguiente [11,12,13]. Visualizar el resultado obtenido.
Invocar al método  registrarVenta($colCodigosBicicletas, $objCliente) de la Clase Empresa donde el $objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el punto 1) y la colección de códigos de bicicletas es la siguiente [0].  Visualizar el resultado obtenido.
Invocar al método  registrarVenta($colCodigosBicicletas, $objCliente) de la Clase Empresa donde el $objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el punto 1) y la colección de códigos de bicicletas es la siguiente [2].  Visualizar el resultado obtenido.
Invocar al método retornarVentasXCliente($tipo,$numDoc)  donde el tipo y número de documento se corresponden con el tipo y número de documento del $objCliente1.
Invocar al método retornarVentasXCliente($tipo,$numDoc)  donde el tipo y número de documento se corresponden con  el tipo y número de documento del $objCliente2
Realizar un echo de la variable Empresa creada en 2.

*/

// Creación de instancias y prueba del sistema

$objCliente1 = new Cliente("Juan", "Pérez", false, "DNI", "12345678");
$objCliente2 = new Cliente("María", "Gómez", false, "DNI", "23456789");

$objBici1 = new BicicletaNacional(11, 89500, 2022, "Fire Bird Plegable Cuadro Acero", 0.85, true,11);
$objBici2 = new BicicletaNacional(12, 310000, 2021, "Bicicleta Trek Marlin 5 Rodado 29 Talle L", 0.70, true,12);
$objBici3 = new Bicicleta(13, 10000, 2023, "Bicicleta Topmega Fixie Streeter R28 Acero 1vel Azul Osc T54", 0.55, false);
$objBici4 = new BicicletaInternacional(14, 12499900, 2020, "Bicicleta Vairo Xr 3.8 D 29", 100, true,"EEUU",6244400);

/*
$objEmpresa = new Empresa("Alta Gama", "Av Argetina 123", array($objBici1, $objBici2, $objBici3), array($objCliente1, $objCliente2));

$colCodigosBici1 = array(11, 12, 13);
$resultado1 = $objEmpresa->registrarVenta($colCodigosBici1, $objCliente1);
echo "Precio final de la venta 1: $" . $resultado1 . "\n";
echo "\n";
$colCodigosBici2 = array(12);
$resultado2 = $objEmpresa->registrarVenta($colCodigosBici2, $objCliente2);
echo "Precio final de la venta 2: $" . $resultado2 . "\n";
echo "\n";
$ventasCliente1 = $objEmpresa->retornarVentasXCliente("DNI", "12345678");
echo "\n";
$ventasCliente2 = $objEmpresa->retornarVentasXCliente("DNI", "23456789");
echo "\n";
echo $objEmpresa;
*/

/*
3. Se crea un objeto Empresa con la siguiente información: denominación =” Alta Gama”, dirección= “Av Argenetina
123”, colección de bicicletas= [$obBici1, $obBici2, $obBici3, $obBici4] , colección de clientes = [$objCliente1,
$objCliente2 ], la colección de ventas realizadas=[].
4. Invocar al método registrarVenta($colCodigosBici, $objCliente) de la Clase Empresa donde el $objCliente es una
referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el punto 1) y la colección de códigos
de bicicletas es la siguiente [11,12,13,14]. Visualizar el resultado obtenido.
5. Invocar al método registrarVenta($colCodigosBicicletas, $objCliente) de la Clase Empresa donde el $objCliente es
una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el punto 1) y la colección de
códigos de bicicletas es la siguiente [0,14]. Visualizar el resultado obtenido.
6. Invocar al método registrarVenta($colCodigosBicicletas, $objCliente) de la Clase Empresa donde el $objCliente es
una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el punto 1) y la colección de
códigos de bicicletas es la siguiente [2,14]. Visualizar el resultado obtenido.
7. Invocar al método informarVentasImportadas(). Visualizar el resultado obtenido.
8. Invocar al método informarSumaVentasNacionales(). Visualizar el resultado obtenido.
9. Realizar un echo de la variable Empresa creada en 3.*/

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


?>