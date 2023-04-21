<?php
/*En la clase Viaje:
1. Se registra la siguiente información: destino, hora de partida, hora de llegada, número,
importe, fecha, cantidad de asientos totales, cantidad de asientos disponibles, y una
referencia a la persona responsable del viaje.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos
definidos en la clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la
clase.
5. Implementar el método asignarAsientosDisponibles($catAsientos) que recibe por
parámetros la canti- dad de asientos que desean asignarse. El método retorna
verdadero en caso que la asignación pueda concretarse y falso en caso contrario. */

class Viaje{
    private $destino;
    private $horaDePartida;
    private $horaDeLlegada;
    private $importe;
    private $fecha;
    private $cantTotalAsientos;
    private $cantAsientosDisponibles;
    private $responsableViaje;

    //Metodos
    //Metodo Constructor
    public function __construct($destino, $horaDePartida,$horaDeLlegada, $importe,$fecha,$cantTotalAsientos,$responsableViaje)
    {
        $this->destino=$destino;
        $this->horaDePartida=$horaDePartida;
        $this->horaDeLlegada=$horaDeLlegada;
        $this->importe=$importe;
        $this->fecha=$fecha;
        $this->cantTotalAsientos=$cantTotalAsientos;
        $this->cantAsientosDisponibles=$cantTotalAsientos;
        $this->responsableViaje=$responsableViaje;
    }
    //Metodos de acceso
    ///////////////////   Getters
    public function getDestino(){
        return $this->destino;
    }
    public function getHoraDePartida(){
        return $this->horaDePartida;
    }
    public function getHoraDeLlegada(){
        return $this->horaDeLlegada;
    }
    public function getImporte(){
        return $this->importe;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getCantTotalAsientos(){
        return $this->cantTotalAsientos;
    }
    public function getCantAsientosDisponibles(){
        return $this->cantAsientosDisponibles;
    }
    public function getResponsableViaje(){
        return $this->responsableViaje;
    }
    //////////////////////   Setters
    public function setDestino($destino){
        $this->destino=$destino;
    }
    public function setHoraDePartida($horaDePartida){
        $this->horaDePartida=$horaDePartida;
    }
    public function setHoraDeLlegada($horaDeLlegada){
        $this->horaDeLlegada=$horaDeLlegada;
    }
    public function setImporte($importe){
        $this->importe=$importe;
    }
    public function setFecha($fecha){
        $this->fecha=$fecha;
    }
    public function setCantTotalAsientos($cantTotalAsientos){
        $this->cantTotalAsientos=$cantTotalAsientos;
    }
    public function setCantAsientosDisponibles($cantAsientosDisponibles){
        $this->cantAsientosDisponibles=$cantAsientosDisponibles;
    }
    public function setResponsableViaje($responsableViaje){
        $this->responsableViaje=$responsableViaje;
    }
    /////Metodo
    public function asignarAsientosDisponibles($cantAsientos){
        $disponibilidad=$this->getCantAsientosDisponibles();
        $resultado=false;
        if(($disponibilidad-$cantAsientos)>0){
            $disponibilidad=$disponibilidad-$cantAsientos;
            $this->setCantAsientosDisponibles($disponibilidad);
            $resultado= true;
        }
        return $resultado;
    }
    ///metodo toString
    public function __toString()
    {
        $mensaje="";
        $mensaje="Destino: ".$this->getDestino()." Hora Salida: ".$this->getHoraDePartida()."
         Hora Salida: ".$this->getHoraDeLlegada()." Fecha: ".$this->getFecha()."\n
        Total Asientos: ".$this->getCantTotalAsientos()." - Asientos Disponibles: ".$this->getCantAsientosDisponibles()."\n
        Responsable: ".$this->getResponsableViaje() ." Importe: $".$this->getImporte()."\n";
        return $mensaje;
    }
      
}


?>