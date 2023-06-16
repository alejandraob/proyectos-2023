<?php
/*
En la clase Venta:
1. Implementar la jerarquía de herencia que corresponda para implementar las ventas on-line o en un local habilitado.
Tener en cuenta los atributos necesarios según lo especificado en el nuevo requerimiento.
2. Implementar la función registrarInformacionVenta($info) que recibe por parámetro un arreglo asociativo $info
donde la claves coinciden con el nombre de los atributos necesarios en cada clase ($info[“formapago”] o
$info[“direccion”] o $info[“diaemtrega”] son ejemplos de claves necesarios en el array $info). Redefinir el método
según crea necesario, en cada clase de la jerarquía.

*/

class Venta {
    private $numero;
    private $fecha;
    private $cliente;
    private $bicicletas;
    private $precioFinal;
    private $formaPago;
    
    public function __construct($numero, $fecha, $cliente, $bicicletas, $precioFinal, $formaPago) {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->cliente = $cliente;
        $this->bicicletas = $bicicletas;
        $this->precioFinal = $precioFinal;
        $this->formaPago = $formaPago;
    }
    
    // Métodos de acceso
    
    public function getNumero() {
        return $this->numero;
    }
    
    public function getFecha() {
        return $this->fecha;
    }
    
    public function getCliente() {
        return $this->cliente;
    }
    
    public function getBicicletas() {
        return $this->bicicletas;
    }
    
    public function getPrecioFinal() {
        return $this->precioFinal;
    }
    public function getFormaPago() {
        return $this->formaPago;
    }

    // Métodos de modificación
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }
    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }
    public function setBicicletas($bicicletas) {
        $this->bicicletas = $bicicletas;
    }
    public function setPrecioFinal($precioFinal) {
        $this->precioFinal = $precioFinal;
    }
    public function setFormaPago($formaPago) {
        $this->formaPago = $formaPago;
    }

/**
 * Implementar el método incorporarBicicleta($objBici) que recibe por parámetro un objeto bicicleta y lo incorpora a la colección de bicicletas de la venta,
 *  siempre y cuando sea posible la venta. El método cada vez que incorpora una bicicleta a la venta, debe actualizar la variable instancia precio final de la venta. 
 * Utilizar el método que calcula el precio de venta de la bici donde crea necesario.
 * @param Bicicleta $objBici
 * @return boolean $retorna
 */   
    public function incorporarBicicleta($objBici) {

        $arregloBicicletas=$this->getBicicletas(); //aqui traigo la coleccion completa del array de bicicleta (mi canasto de bicis)
        $precioFinal=$this->getPrecioFinal(); //aqui traigo el precio de la suma de la compra del momento (mi subtotal)
        $retorna=false;

        if($objBici->getActiva()){//compruebo mi objeto si la bici esta activa para la venta
            array_push($arregloBicicletas, $objBici); //array_push me sirve para incorporar en mi canasto mi nueva bici
            $this->setBicicletas($arregloBicicletas); //y el set bicicletas para modificar el arreglo con la bici nueva
            $precioFinal+=$objBici->darPrecioVenta();//al subtotal le sumo lo ultimo que meti a mi canasto    
            $this->setPrecioFinal($precioFinal);//Y aqui actualizamos el valor de la venta con la ultima bici agregada
            $retorna=true;
        }

        return $retorna;

    }
/*
    1. Implementar el método retornarTotalVentaNacional() que retorna la sumatoria del precio venta de cada una de las
    bicicletas Nacionales vinculadas a la venta.
    2. Implementar el método retornarBicicletasImportadas() que retorna una colección de bicicletas importadas vinculadas
    a la venta. Si la venta solo se corresponde con bicicletas Nacionales la colección retornada debe ser vacía.
    */

    public function retornarTotalVentaNacional(){
        $arregloBicicletas=$this->getBicicletas();
        $total=0;
        foreach ($arregloBicicletas as $bicicleta) {
            if($bicicleta instanceof BicicletaNacional){
                $total+=$bicicleta->darPrecioVenta();
            }
        }
        return $total;
    }
    public function retornarBicicletasImportadas(){
        $arregloBicicletas=$this->getBicicletas();
        $arregloBicicletasImportadas=[];
        foreach ($arregloBicicletas as $bicicleta) {
            if($bicicleta instanceof BicicletaInternacional){
                array_push($arregloBicicletasImportadas, $bicicleta);
            }
        }
        return $arregloBicicletasImportadas;
    }
/*En la clase Venta:
1. Implementar la jerarquía de herencia que corresponda para implementar las ventas on-line o en un local habilitado.
Tener en cuenta los atributos necesarios según lo especificado en el nuevo requerimiento.
2. Implementar la función registrarInformacionVenta($info) que recibe por parámetro un arreglo asociativo $info
donde la claves coinciden con el nombre de los atributos necesarios en cada clase ($info[“formapago”] o
$info[“direccion”] o $info[“diaemtrega”] son ejemplos de claves necesarios en el array $info). Redefinir el método
según crea necesario, en cada clase de la jerarquía.*/
    public function registrarInformacionVenta($info){
        $formaPago=$this->getFormaPago();
        array_push($info, $formaPago);
    }




    
    public function __toString() {
        $bicicletasStr = "";
        foreach ($this->getBicicletas() as $bicicleta) {
            $bicicletasStr .= $bicicleta. "\n";
        }
        
        return "Número: " . $this->getNumero() . "\n" .
               "Fecha: " . $this->getFecha() . "\n" .
               "Cliente: \n" . $this->getCliente(). "\n" .
               "Bicicletas:\n" . $bicicletasStr .
               "Precio Final: $" . $this->getPrecioFinal(). "\n";
    }
}


?>