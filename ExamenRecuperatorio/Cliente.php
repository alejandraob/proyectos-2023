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
        return "Nombre: " . $this->getNombre(). " " .
               "Apellido: " . $this->getApellido(). "\n" .
               "Baja: " . ($this->isBaja() ? "Sí" : "No") . "\n" .
               "Tipo de Documento: " . $this->getTipoDocumento(). " " .
               "Número de Documento: " . $this->getNumeroDocumento(). "\n";
    }
}

?>