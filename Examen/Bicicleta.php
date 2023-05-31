<?php
/*
En la clase Bicicleta:
1 Se registra la siguiente información: código, costo, año fabricación, 
descripción, porcentaje, incremento anual, 
activa (atributo que va a contener un valor true, 
 si la bici está  disponible para la venta  y false en caso contrario).***
2 Método constructor que recibe como parámetros los valores iniciales 
para los atributos  definidos en la clase.****
3 Los métodos de acceso de cada uno de los atributos de la clase.****
4 Redefinir el método toString  para que retorne la información de los atributos de la clase.***
5 Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una bici.
 Si la bici no se encuentra disponible para la venta retorna un valor < 0. Si la bici está disponible
  para la venta, el método realiza el siguiente cálculo: 
    $_venta = $_compra + $_compra * (anio * por_inc_anual) 
    donde  $_compra:  es el costo de la bici.
                anio: cantidad de años transcurridos desde que se fabricó  la bici.
                por_inc_anual:  porcentaje de incremento anual de la bici.

 */

 class Bicicleta {
    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porcentajeIncrementoAnual;
    private $activa;
    
    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentajeIncrementoAnual, $activa) {
        $this->codigo = $codigo;
        $this->costo = $costo;
        $this->anioFabricacion = $anioFabricacion;
        $this->descripcion = $descripcion;
        $this->porcentajeIncrementoAnual=$porcentajeIncrementoAnual;

        $this->activa = $activa;
    }
    
    // Métodos de acceso
    
    public function getCodigo() {
        return $this->codigo;
    }
    
    public function getCosto() {
        return $this->costo;
    }
    
    public function getAnioFabricacion() {
        return $this->anioFabricacion;
    }
    
    public function getDescripcion() {
        return $this->descripcion;
    }
    
    public function getPorcentajeIncrementoAnual() {
        return $this->porcentajeIncrementoAnual;
    }
    

    public function getActiva() {
        return $this->activa;
    }
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    public function setCosto($costo) {
        $this->costo = $costo;
    }
    public function setAnioFabricacion($anioFabricacion) {
        $this->anioFabricacion = $anioFabricacion;
    }
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    public function setPorcentajeIncrementoAnual($porcentaje) {
        $this->porcentajeIncrementoAnual = $porcentaje;
    }
    public function setActiva($activa) {
        $this->activa = $activa;
    }


/**
 * Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una bici. Si la bici no se encuentra disponible para la venta retorna un valor < 0. 
 * Si la bici está disponible   para la venta, el método realiza el siguiente cálculo:     $_venta = $_compra + $_compra * (anio * por_inc_anual) 
 *     donde  $_compra:  es el costo de la bici. 
 *     anio: cantidad de años transcurridos desde que se fabricó  la bici.
 *     por_inc_anual:  porcentaje de incremento anual de la bici.
 * @return float $precioVenta
 */
public function darPrecioVenta(){
    $retorno = -1;
    if($this->getActiva()){
      
    $anio = date('Y') - $this->getAnioFabricacion(); //date('Y') devuelve el año actual
    $por_inc_anual= $this->getPorcentajeIncrementoAnual();
    $precioVenta = $this->getCosto() + $this->getCosto() * ($anio * $por_inc_anual);
        $retorno = $precioVenta;
    }
    return $retorno;

}

    public function __toString() {
        return "Código: " . $this->getCodigo() . "\n" .
               "Costo: $" . $this->getCosto() . "\n" .
               "Año de Fabricación: " . $this->getAnioFabricacion() . "\n" .
               "Descripción: " . $this->getDescripcion() . "\n" .
               "Porcentaje: " . $this->getPorcentajeIncrementoAnual() . "%\n" .
               "Precio Venta: " . $this->darPrecioVenta() . "\n" .
               "Activa: " . ($this->activa ? "Sí" : "No");
    }
}


























/*
 class Bicicleta{
    //Atributos
    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porcentaje;
    private $incrementoAnual;
    private $activa;
    //Metodos
    //Metodo constructor
    public function __construct($codigo,$costo,$anioFabricacion,$descripcion,$porcentaje,$activa)
    {
        $this->codigo=$codigo;
        $this->costo=$costo;
        $this->anioFabricacion=$anioFabricacion;
        $this->descripcion=$descripcion;
        $this->porcentaje=$porcentaje;
        $this->activa=$activa;
    }
    //Metodos Getters
    public function getCodigo(){
        return $this->codigo;
    }
    public function getCosto(){
        return $this->costo;
    }
    public function getAnioFabricacion(){
        return $this->anioFabricacion;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getPorcentaje(){
        return $this->porcentaje;
    }
    public function getIncrementoAnual(){
        return $this->incrementoAnual;
    }
    public function getActiva(){
        return $this->activa;
    }
    //Metodos Setters
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function setCosto($costo){
        $this->costo=$costo;
    }
    public function setAnioFabricacion($anioFabricacion){
        $this->anioFabricacion=$anioFabricacion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    public function setPorcentaje($porcentaje){
        $this->porcentaje=$porcentaje;
    }
    public function setIncrementoAnual($incremento){
        $this->incrementoAnual=$incremento;
    }
    public function setActiva($activa){
        $this->activa=$activa;
    }

    public function estado(){
        $activa=$this->getActiva();
        $mensaje="No Disponible";
        if($activa){
            $mensaje="Disponible";
        }
        return $mensaje;
    }
    /* Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una bici.
 Si la bici no se encuentra disponible para la venta retorna un valor < 0. Si la bici está disponible
  para la venta, el método realiza el siguiente cálculo: 
    $_venta = $_compra + $_compra * (anio * por_inc_anual) 
    donde  $_compra:  es el costo de la bici.
                anio: cantidad de años transcurridos desde que se fabricó  la bici.
                por_inc_anual:  porcentaje de incremento anual de la bici.*/
 /*   public function darPrecioVenta(){
       $activa=$this->getActiva();
         $costo=$this->getCosto();
            $anio=$this->getAnioFabricacion();
                $porcentaje=$this->getPorcentaje();
                    $incremento=$this->getIncrementoAnual();
                        $venta=0;
        if($activa){
            $venta=$costo+($costo*($anio*$porcentaje));
        }
        return $venta;
    }


    //to String
    public function __toString()
    {

        $mensaje="\n";
        $mensaje="Cod: ".$this->getCodigo()." Descripcion: ".$this->getDescripcion()."\nAño: ".$this->getAnioFabricacion()." Costo: $".$this->getCosto()." Inc. Anual:".$this->getPorcentaje()." %\n
        Estado: ".$this->estado()."\n";
        return $mensaje;

    }
 }
*/


?>