<?php
class BicicletaNacional extends Bicicleta{
    private $descuento;

    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentajeIncrementoAnual, $activa, $descuento=15){
        parent::__construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentajeIncrementoAnual, $activa);
        $this->descuento=$descuento;        
    }
    public function getDescuento(){
        return $this->descuento;
    }
    public function setDescuento($descuento){
        $this->descuento=$descuento;
    }
//reutilizamos el metodo padre para dar el precio Venta
function darPrecioVenta(){
    $precioVenta=parent::darPrecioVenta();
    $descuento=$this->getDescuento();
    $precioVenta=$precioVenta-($precioVenta*$descuento/100);
    return $precioVenta;
 }


    public function __toString(){
        return parent::__toString().", Descuento: ".$this->descuento;
    }
}
?>