<?php
class Terminal{
        /*En la clase Terminal:
    1. Se registra la siguiente información: denominación, dirección y la colección empresas
    registradas en la terminal.
    2. Método constructor que recibe como parámetros los valores iniciales para los atributos
    de la clase.
    3. Los métodos de acceso para cada una de las variables instancias de la clase.
    4. Redefinir el método _toString para que retorne la información de los atributos de la
    clase.
    5. Implementar el método ventaAutomatica($cantAsientos, $fecha, $destino, $empresa) que
    recibe por parámetro la cantidad de asientos que se requieren, una fecha, un destino y
    la empresa con la que se desea viajar. Automáticamente se registra la venta del viaje. (Para
    la implementación de este método debe utilizarse uno de los métodos implementados en laclase
    Viaje).
    6. Implementar el método empresaMayorRecaudacion retorna un objeto de la clase
    empresa que se co- rresponde con la de mayor recaudación.
    7. Implementar el método responsableViaje($numeroViaje) que recibe por parámetro un
    numero de viaje y retorna al responsable del viaje.
    */
    private $denominacion;
    private $direccion;
    private $empresasRegistradas; //es una coleccion de empresas

    public function __construct($denominacion, $direccion, $empresasRegistradas){
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->empresasRegistradas = $empresasRegistradas;
    }

    //Metodos de acceso
    public function getDenominacion(){
        return $this->denominacion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getEmpresasRegistradas(){
        return $this->empresasRegistradas;
    }
    public function setDenominacion($denominacion){
        $this->denominacion = $denominacion;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setEmpresasRegistradas($empresasRegistradas){
        $this->empresasRegistradas = $empresasRegistradas;
    }

    /* Implementar el método ventaAutomatica($cantAsientos, $fecha, $destino, $empresa) que
    recibe por parámetro la cantidad de asientos que se requieren, una fecha, un destino y
    la empresa con la que se desea viajar. Automáticamente se registra la venta del viaje. (Para
    la implementación de este método debe utilizarse uno de los métodos implementados en la clase
    Viaje).*/
    /**
     * @param Empresa $empresa
     * @return Viaje
     */
    public function ventaAutomatica($cantAsientos, $fecha, $destino, $empresa){
        $viajeVendido = $empresa->venderViajeADestino($cantAsientos, $destino, $fecha); //metodo de la clase empresa
        return $viajeVendido;
    }

    /*Implementar el método empresaMayorRecaudacion retorna un objeto de la clase
    empresa que se co- rresponde con la de mayor recaudación. */
    /**
     * @return Empresa
     */
    public function empresaMayorRecaudacion(){
        $coleccion = $this->getEmpresasRegistradas();//coleccion de empresas
        $cantidad = count($coleccion);//cantidad de empresas
        $mayorRecaudacion = $coleccion[0];//primer elemento de la coleccion
        for($i = 1; $i < $cantidad; $i++){//recorro la coleccion
            if($coleccion[$i]->recaudacionTotal() > $mayorRecaudacion->recaudacionTotal()){//si la recaudacion de la empresa en la posicion i es mayor a la recaudacion de la empresa en la posicion i-1
                $mayorRecaudacion = $coleccion[$i];//la empresa con mayor recaudacion es la de la posicion i
            }
        }
        return $mayorRecaudacion;//retorno la empresa con mayor recaudacion
    }

    /* Implementar el método responsableViaje($numeroViaje) que recibe por parámetro un
    numero de viaje y retorna al responsable del viaje. */
    /**
     * @param int $numeroViaje
     * @return Responsable
     */
    public function responsableViaje($numeroViaje){
        $coleccion = $this->getEmpresasRegistradas();//coleccion de empresas
        $cantidad = count($coleccion);//cantidad de empresas
        $responsable = null;//inicializo la variable responsable
        $i = 0;//inicializo el contador
        while($i < $cantidad && $responsable == null){//mientras no se haya recorrido toda la coleccion y no se haya encontrado al responsable
            $responsable = $coleccion[$i]->buscarResponsable($numeroViaje);//busco al responsable en la empresa de la posicion i
            $i++;//incremento el contador
        }
        return $responsable;//retorno el responsable
    }

    public function __toString(){
        return "Denominacion: ".$this->getDenominacion()."\n".
        "Direccion: ".$this->getDireccion()."\n".
        "Empresas registradas: ".$this->getEmpresasRegistradas()."\n";
    }   








}


?>