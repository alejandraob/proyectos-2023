<?php

class Cliente {
    private $nombre;
    private $apellido;
    private $baja;
    private $tipoDocumento;
    private $numeroDocumento;
    
    public function __construct($nombre, $apellido, $baja, $tipoDocumento, $numeroDocumento) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->baja = $baja;
        $this->tipoDocumento = $tipoDocumento;
        $this->numeroDocumento = $numeroDocumento;
    }
    
    // Métodos de acceso
    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function getApellido() {
        return $this->apellido;
    }
    
    public function isBaja() {
        return $this->baja;
    }
    
    public function getTipoDocumento() {
        return $this->tipoDocumento;
    }
    
    public function getNumeroDocumento() {
        return $this->numeroDocumento;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function setBaja($baja) {
        $this->baja = $baja;
    }
    public function setTipoDocumento($tipoDocumento) {
        $this->tipoDocumento = $tipoDocumento;
    }
    public function setNumeroDocumento($numeroDocumento) {
        $this->numeroDocumento = $numeroDocumento;
    }
    
    
    public function __toString() {
        return "Nombre: " . $this->nombre . "\n" .
               "Apellido: " . $this->apellido . "\n" .
               "Baja: " . ($this->baja ? "Sí" : "No") . "\n" .
               "Tipo de Documento: " . $this->tipoDocumento . "\n" .
               "Número de Documento: " . $this->numeroDocumento;
    }
}



















/*
/*
En la clase Cliente:
0.	Se registra la siguiente información: nombre, apellido, si está o no dado de baja, 
el tipo y el número de documento. Si un cliente está dado de baja, no puede registrar
 compras desde el momento de su baja.**
1.	Método constructor que recibe como parámetros los valores iniciales para los atributos.**
2.	Los métodos de acceso de cada uno de los atributos de la clase.**
3.	Redefinir el método _toString  para que retorne la información de los atributos de la clase.***

*/
/*
class Cliente{
    //Atirbutos
    private $nombre;
    private $apellido;
    private $estado;
    private $tipoDoc;
    private $nroDoc;
    //Metodos

    //Metodo constructor
    public function __construct($nombre,$apellido,$estado,$tipoDoc,$nroDoc)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->estado=$estado;
        $this->tipoDoc=$tipoDoc;
        $this->nroDoc=$nroDoc;
    }
    //Getters
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getTipoDoc(){
        return $this->tipoDoc;
    }
    public function getNroDoc(){
        return $this->nroDoc;
    }
    //Setters
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }
    public function setTipoDoc($tipoDoc){
        $this->tipoDoc=$tipoDoc;
    }
    public function setNroDoc($nroDoc){
        $this->nroDoc=$nroDoc;
    }

    //to String
    public function __toString()
    {
        $mensaje="\n";
        $mensaje="Nombre y Apellido: ".$this->getNombre()." ".$this->getApellido()."\nTipo Documento: ".$this->getTipoDoc()." nro: ".$this->getNroDoc()."\nEstado: ".$this->getEstado()."\n";
        return $mensaje;
    }

}

*/
?>