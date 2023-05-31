<?php
/*
En la clase Venta:
1.	Se registra la siguiente información: número, fecha, referencia al cliente, 
referencia a una colección de bicicletas y el precio final.**
2.	Método constructor  que recibe como parámetros cada uno de 
los valores a ser asignados a cada atributo de la clase.**
3.	Los métodos de acceso de cada uno de los atributos de la clase.**
4.	Redefinir el método _toString  para que retorne la información de los atributos de la clase.
5.	Implementar el método incorporarBicicleta($objBici) que recibe por parámetro un objeto bicicleta y 
lo incorpora a la colección de bicicletas de la venta, siempre y cuando sea posible la venta. 
El método cada vez que incorpora una  bicicleta a la venta, debe actualizar la variable 
instancia precio final de la venta. Utilizar el método que calcula el precio de venta de 
la bici donde crea necesario.
*/

class Venta {
    private $numero;
    private $fecha;
    private $cliente;
    private $bicicletas;
    private $precioFinal;
    
    public function __construct($numero, $fecha, $cliente, $bicicletas, $precioFinal) {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->cliente = $cliente;
        $this->bicicletas = $bicicletas;
        $this->precioFinal = $precioFinal;
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
    
    public function __toString() {
        $bicicletasStr = "";
        foreach ($this->bicicletas as $bicicleta) {
            $bicicletasStr .= $bicicleta. "\n";
        }
        
        return "Número: " . $this->numero . "\n" .
               "Fecha: " . $this->fecha . "\n" .
               "Cliente: " . $this->cliente. "\n" .
               "Bicicletas:\n" . $bicicletasStr .
               "Precio Final: $" . $this->precioFinal;
    }
}


?>