<?php
/*En la //clase Empresa:
1.	Se registra la siguiente información: denominación, dirección, la colección de clientes,
 colección de bicicletas y la colección de ventas realizadas.
2.	Método constructor que recibe como parámetros los valores iniciales para los atributos de la clase. *
3.	Los métodos de acceso para  cada una de las variables instancias de la clase.*
4.	Redefinir el método _toString  para que retorne la información de los atributos de la clase.**
5.	Implementar el método retornarBici($codigoBici) que recorre la colección de bicis de la Empresa y 
retorna la referencia al objeto bicicleta  cuyo código coincide con el recibido por parámetro. 
6.	Implementar el método registrarVenta($colCodigosBici, $objCliente) método que recibe por 
parámetro una colección de códigos de bicicletas, la cual es recorrida, y por cada elemento de
 la colección se busca el objeto bicicleta correspondiente al código y  se incorpora a la colección 
 de bicis de la instancia Venta que debe ser creada. Recordar que no todos los clientes ni todas las 
 bicis, están disponibles para registrar una venta en un momento determinado.                                                                     
El método debe setear los variables instancias de venta que corresponda y retornar el importe final de la venta. 
7.	Implementar  el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro el tipo y
 número de documento de un Cliente y retorna una colección  con las ventas realizadas al cliente. 
 */
class Empresa {
    private $denominacion;
    private $direccion;
    private $clientes;
    private $bicicletas;
    private $ventasRealizadas;
    
    public function __construct($denominacion, $direccion, $bicicletas, $clientes) {
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->clientes = $clientes;
        $this->bicicletas = $bicicletas;
        $this->ventasRealizadas = array();
    }
    
    // Métodos de acceso
    
    public function getDenominacion() {
        return $this->denominacion;
    }
    
    public function getDireccion() {
        return $this->direccion;
    }
    
    public function getColeccionClientes() {
        return $this->clientes;
    }
    
    public function getColeccionBicicletas() {
        return $this->bicicletas;
    }
    
    public function getColeccionVentas() {
        return $this->ventasRealizadas;
    }

    public function setDenominacion($denominacion) {
        $this->denominacion = $denominacion;
    }
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
    public function setColeccionClientes($clientes) {
        $this->clientes = $clientes;
    }
    public function setColeccionBicicletas($bicicletas) {
        $this->bicicletas = $bicicletas;
    }
    public function setColeccionVentas($ventasRealizadas) {
        $this->ventasRealizadas = $ventasRealizadas;
    }


    /**
     * Implementar el método retornarBici($codigoBici) que recorre la colección de bicis de la Empresa y retorna la referencia al objeto bicicleta 
     * cuyo código coincide con el recibido por parámetro
     * @param array $codigoBici
     * @return Bicicleta
     */

    public function retornarBici($codigoBici)
    {
        $bandera = false; //es mi bandera
        $retorno = null;
        $i = 0;

        $listadoBici = $this->getColeccionBicicletas();
        $longitud = count($listadoBici);
        while ($i < $longitud && !$bandera) {
            if ($listadoBici[$i]->getCodigo() == $codigoBici) { //en el arreglo de la bicicleta en esta posicion $i traeme el codigo y comparalo con el que viene por parametro
                $bandera = true;
                $retorno = $listadoBici[$i];
            }
            $i++;
        }
        return $retorno;
    }

 /**
  * Implementar el método registrarVenta($colCodigosBici, $objCliente) método que 
 * recibe por parámetro una colección de códigos de bicicletas, la cual es recorrida, 
 * y por cada elemento de la colección se busca el objeto bicicleta correspondiente al 
 * código y se incorpora a la colección de bicis de la instancia Venta que debe ser creada. 
 * Recordar que no todos los clientes ni todas las bicis, están disponibles para registrar
 * una venta en un momento determinado. 
 * El método debe setear los variables instancias de venta que corresponda y 
 * retornar el importe final de la venta.
 * @param array $colCodigosBici
 * @param Cliente $objCliente
 * @return float $importeFinal
  */
    
    public function registrarVenta($colCodigosBici, $objCliente) {
        $colVentas= $this->getColeccionVentas();
        $venta = new Venta(count($colVentas) + 1, date("Y-m-d"), $objCliente, array(), 0);
        $i=0;
        $colCodigosBici = $this->getColeccionBicicletas();
        $bandera = count($colCodigosBici);
        while ($i < $bandera) {
            $bicicleta = $this->retornarBici($colCodigosBici[$i]->getCodigo());
            if ($bicicleta != null && $bicicleta->getActiva()) {
                $venta->incorporarBicicleta($bicicleta);
            }
            $i++;
        }
        array_push($colVentas, $venta); //array_push($array, $valor1, $valor2...
        $this->setColeccionVentas($colVentas);
        $importeFinal=$venta->getPrecioFinal();
        
        return $importeFinal;
    }
      
    /**
     * Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro el tipo y 
     * número de documento de un Cliente y retorna una colección con las ventas realizadas al cliente.
     * @param string $tipo
     * @param string $numDoc
     * @return array $ventasCliente
     */
    public function retornarVentasXCliente($tipo, $numDoc) {
        $ventasCliente = array();
        $ventasRealizada = $this->getColeccionVentas();
        $longitud = count($ventasRealizada);
        $retorno=null;

        for($i=0; $i<$longitud; $i++){
            if($ventasRealizada[$i]->getCliente()->getTipoDocumento()==$tipo &&
             $ventasRealizada[$i]->getCliente()->getNumeroDocumento()==$numDoc){
                $retorno=$ventasRealizada[$i];
                array_push($ventasCliente, $retorno);
            }

        }
        return $ventasCliente;

    }
       


    public function __toString() {
        $clientesStr = "";
        foreach ($this->clientes as $cliente) {
            $clientesStr .= $cliente. "\n";
        }
        
        $bicicletasStr = "";
        foreach ($this->bicicletas as $bicicleta) {
            $bicicletasStr .= $bicicleta. "\n";
        }
        
        $ventasStr = "";
        foreach ($this->ventasRealizadas as $venta) {
            $ventasStr .= $venta . "\n";
        }
        
        return "Denominación: " . $this->getDenominacion() . "\n" .
               "Dirección: " . $this->getDireccion(). "\n" .
               "Clientes:\n" . $clientesStr .
               "Bicicletas:\n" . $bicicletasStr .
               "Ventas Realizadas:\n" . $ventasStr;
    }
}



?>