<?php
include_once("Viaje.php");
include_once("Responsable.php");
include_once("Terminal.php");
/*En la clase Empresa :
1. Se registra la siguiente información: identificación, nombre y la colección de Viajes que
realiza.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método darViajeADestino($elDestino) que recibe por parámetro un
destino junto a una cantidad de asientos y retorna una colección con todos los viajes
disponibles a ese destino.
6. Implementar el método incorporarViaje($objViaje) que recibe como parámetro un viaje,
verifica que no se encuentre registrado ningún otro viaje al mismo destino, en la misma
fecha y con el mismo horario de partida. El método retorna verdadero si la incorporación
del viaje se realizó correctamente y falso en caso contrario.
7. Implementar el método venderViajeADestino($canAsientos, $destino, $fecha) método que
recibe por parámetro la cantidad de asientos, el destino, una fecha y se registra la
asignación del viaje en caso de ser posible. (invocar al método
asignarAsientosDisponibles). El método retorna la instancia del viaje asignado o null
en caso contrario.
8. Implementar el método montoRecaudado que retorna el monto recaudado por la
Empresa. (tener en cuenta los asientos vendidos y el importe del viaje) */
class Empresa{
    //////////////////                              Atributos
    private $id;
    private $nombre;
    private $viajes=[];
    /////////////////////////////////////           Metodos
    //Metodo constructor
    public function __construct($id, $nombre, $viajes)
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->viajes=[];
    } 
    ///Metodos control
    ////////       Getters
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getViajes(){
        return $this->viajes;
    }
    //////////   Setters
    public function setId($id){
        $this->id=$id;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setViajes($viajes){
        $this->viajes=$viajes;
    }
    /////////////  Metodos implementados

    public function verViajes(){
        $trip=$this->getViajes();
        $contador=count($trip);
        $i=0;
        $mensaje="No se han cargado viajes.\n";
        while($i<$contador){
            $mensaje=$i.$trip[$i]."\n";
        }
        return $mensaje;
    }


    public function darViajeADestino($elDestino, $cantAsientos){
        $grupoviaje=$this->getViajes();
        $takeTripDestino=[];

        for($i=0; $i<count($grupoviaje); $i++){
            $puntero_Viaje_Seleccionado=$grupoviaje[$i];
            print_r($puntero_Viaje_Seleccionado)."\n";
            if($puntero_Viaje_Seleccionado->getDestino()==$elDestino && $puntero_Viaje_Seleccionado->getCantAsientosDisponibles()>=$cantAsientos){
                $takeTripDestino[]=$puntero_Viaje_Seleccionado;
            }
        }
        return $puntero_Viaje_Seleccionado;
    }
    public function venderViajeADestino($canAsientos, $destino, $fecha){
        $trip=$this->getViajes();
        $i=0;
        $tripCount=count($trip);
        $tripAsignado=null;
        $encontro=false;

        while($i<$tripCount && !$encontro){
            $punteroTrip=$trip[$i];
            if($punteroTrip->getdestino()===$destino && $punteroTrip->getfecha()===$fecha){
                $disponibilidad=$punteroTrip->asignarAsientosDisponibles($canAsientos);
                if($disponibilidad){
                    $encontro=true;
                    $tripAsignado=$punteroTrip;
                }
            }
            $i++;
        }
        return $tripAsignado;
    }




    ///////////////////////////////

    ///////////Metodo to String
    public function __toString()
    {
        $mensaje="";
        $mensaje="ID: ".$this->getId()." Empresa: ".$this->getNombre()."\n
        Viajes:\n".$this->verViajes();
        return $mensaje;
    }


}
