<?php
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
Empresa. (tener en cuenta los asientos vendidos y el importe del viaje)*/
class Empresa
{

    private $identificacion;
    private $nombre;
    private $viajes;

    public function __construct($identificacion, $nombre, $viajes){
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->viajes = $viajes;
    }

    //Metodos de acceso
    public function getIdentificacion(){
        return $this->identificacion;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getViajes(){
        return $this->viajes;
    }

    public function setIdentificacion($identificacion){
        $this->identificacion = $identificacion;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setViajes($viajes){
        $this->viajes = $viajes;
    }

    //darViajeADestino
    /*Implementar el método darViajeADestino($elDestino) que recibe por parámetro un
    destino junto a una cantidad de asientos y retorna una colección con todos los viajes
    disponibles a ese destino. */

    public function darViajeADestino($elDestino){
        $viajes = $this->getViajes(); //obtengo la coleccion de viajes
        $i = 0; //variable de control
        $contador = count($viajes); //obtengo la cantidad de viajes
        $viajesDisponibles = []; //creo una coleccion vacia

        while ($i < $contador) { //recorro la coleccion de viajes
            /* Al recorrer mi coleccion comparo el destino con mi objeto de viaje */
            if ($viajes[$i]->getDestino() == $elDestino) {
                $viajesDisponibles[] = $viajes[$i]; //si se cumple la condicion agrego el viaje a mi coleccion
            }
            $i++; //incremento mi variable de control
        }
        return $viajesDisponibles; //retorno la coleccion de viajes
    }

        //metodo incorporar viaje
        /*Implementar el método incorporarViaje($objViaje) que recibe como parámetro un viaje,
        verifica que no se encuentre registrado ningún otro viaje al mismo destino, en la misma
        fecha y con el mismo horario de partida. El método retorna verdadero si la incorporación
        del viaje se realizó correctamente y falso en caso contrario. */
    public function incorporarViaje($objViaje){ //objViaje es un objeto de la clase Viaje
        $respuesta=false; //variable de control
        $viajes=$this->getViajes(); //obtengo la coleccion de viajes
        $i=0; //variable de control
        $contador=count($viajes); //obtengo la cantidad de viajes

        while($i<$contador && $respuesta==false){//recorro la coleccion de viajes
            /* Al recorrer mi coleccion comparo el destino, fecha y hora de partida con mi objeto de viaje */
            if($viajes[$i]->getDestino()==$objViaje->getDestino() && $viajes[$i]->getFecha()==$objViaje->getFecha() && $viajes[$i]->getHoraPartida()==$objViaje->getHoraPartida()){
                $respuesta=true;//si se cumple la condicion cambio el valor de mi variable de control
            }
            $i++;//incremento mi variable de control
        }
        return $respuesta;//retorno el valor de mi variable de control
    }

    //metodo venderViajeADestino
            /*  Implementar el método venderViajeADestino($canAsientos, $destino, $fecha) método que
        recibe por parámetro la cantidad de asientos, el destino, una fecha y se registra la
        asignación del viaje en caso de ser posible. (invocar al método
        asignarAsientosDisponibles). El método retorna la instancia del viaje asignado o null
        en caso contrario.  */
    public function venderViajeDestino($canAsientos, $destino, $fecha)
    {
        $viajes = $this->getViajes(); //obtengo la coleccion de viajes
        $i = 0; //variable de control
        $contador = count($viajes); //obtengo la cantidad de viajes
        $viaje = null; //variable de control
        $encontro = false; //variable de control

        while ($i < $contador && $viaje == null) { //recorro la coleccion de viajes
            /* Al recorrer mi coleccion comparo el destino, fecha y hora de partida con mi objeto de viaje */
            if ($viajes[$i]->getDestino() == $destino && $viajes[$i]->getFecha() == $fecha) {
                if($viajes[$i]->asignarAsientosDisponibles($canAsientos)){ //si se cumple la condicion cambio el valor de mi variable de control
                    $viaje = $viajes[$i]; //asigno el viaje a mi variable de control
                    $encontro = true; //cambio el valor de mi variable de control
                }
            }
            $i++; //incremento mi variable de control
        }
        if($encontro==false){ //si no se cumple la condicion
            $viaje=null; //asigno null a mi variable de control
        }
        return $viaje; //retorno el valor de mi variable de control
    }
    //montoRecaudado
    /* Implementar el método montoRecaudado que retorna el monto recaudado por la
    Empresa. (tener en cuenta los asientos vendidos y el importe del viaje)*/
    public function montoRecaudado(){
        $viajes=$this->getViajes(); //obtengo la coleccion de viajes
        $i=0; //variable de control
        $contador=count($viajes); //obtengo la cantidad de viajes
        $monto=0; //variable de control

        while($i<$contador){ //recorro la coleccion de viajes
            $monto=$monto+$viajes[$i]->getImporte(); //acumulo el importe de cada viaje
            $i++; //incremento mi variable de control
        }
        return $monto; //retorno el valor de mi variable de control
    }

    public function __toString(){
        return "Identificacion: ".$this->getIdentificacion()."\n".
        "Nombre: ".$this->getNombre()."\n".
        "Viajes: ".$this->getViajes()."\n";
    }


}



