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
    private $horaPartida;
    private $horaLlegada;
    private $numeroImporte;
    private $fecha;
    private $cantAsientosTotales;
    private $cantAsientosDisponibles;
    private $personaResponsable;

    public function __construct($destino, $horaPartida, $horaLlegada, $numeroImporte, $fecha, $cantAsientosTotales, $personaResponsable){
        $this->destino = $destino;
        $this->horaPartida = $horaPartida;
        $this->horaLlegada = $horaLlegada;
        $this->numeroImporte = $numeroImporte;
        $this->fecha = $fecha;
        $this->cantAsientosTotales = $cantAsientosTotales;
        $this->cantAsientosDisponibles = $cantAsientosTotales;
        $this->personaResponsable = $personaResponsable;
    }

    //Metodos de acceso
    public function getDestino(){
        return $this->destino;
    }
    public function getHoraPartida(){
        return $this->horaPartida;
    }
    public function getHoraLlegada(){
        return $this->horaLlegada;
    }
    public function getNumeroImporte(){
        return $this->numeroImporte;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getCantAsientosTotales(){
        return $this->cantAsientosTotales;
    }
    public function getCantAsientosDisponibles(){
        return $this->cantAsientosDisponibles;
    }
    public function getPersonaResponsable(){
        return $this->personaResponsable;
    }
    public function setDestino($destino){
        $this->destino = $destino;
    }
    public function setHoraPartida($horaPartida){
        $this->horaPartida = $horaPartida;
    }
    public function setHoraLlegada($horaLlegada){
        $this->horaLlegada = $horaLlegada;
    }
    public function setNumeroImporte($numeroImporte){
        $this->numeroImporte = $numeroImporte;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setCantAsientosTotales($cantAsientosTotales){
        $this->cantAsientosTotales = $cantAsientosTotales;
    }
    public function setCantAsientosDisponibles($cantAsientosDisponibles){
        $this->cantAsientosDisponibles = $cantAsientosDisponibles;
    }
    public function setPersonaResponsable($personaResponsable){
        $this->personaResponsable = $personaResponsable;
    }

    //Metodo asignarAsientosDisponibles
    public function asignarAsientosDisponibles($catAsientos){
        $respuesta=false;
        if($this->getCantAsientosDisponibles()>=$catAsientos){
            $this->setCantAsientosDisponibles($this->getCantAsientosDisponibles()-$catAsientos);
            $respuesta=true;
        }
        return $respuesta;
    }




    public function __toString(){
        return "Destino: ".$this->getDestino().
        "\n Hora de partida: ".$this->getHoraPartida().
        "Hora de llegada: ".$this->getHoraLlegada().
        "\n Numero de importe: ".$this->getNumeroImporte().
        " Fecha: ".$this->getFecha().
        "\n Cantidad de asientos totales: ".$this->getCantAsientosTotales().
        " Cantidad de asientos disponibles: ".$this->getCantAsientosDisponibles().
        "\n Persona responsable: ".$this->getPersonaResponsable();
    }






}