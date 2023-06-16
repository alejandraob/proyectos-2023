<?php
class BicicletaInternacional extends Bicicleta{
    private $pais;
    private $valorImportacion;

    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentajeIncrementoAnual, $activa, $pais, $valorImportacion){
        parent::__construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentajeIncrementoAnual, $activa);
        $this->pais=$pais;
        $this->valorImportacion=$valorImportacion;
        
    }
    public function getPais(){
        return $this->pais;
    }
    public function getValorImportacion(){
        return $this->valorImportacion;
    }
    public function setPais($pais){
        $this->pais=$pais;
    }
    public function setValorImportacion($valorImportacion){
        $this->valorImportacion=$valorImportacion;
    }

//El precio debe cobrarse el incremento anual y el valor de importación
function darPrecioVenta(){
    $precioVenta=parent::darPrecioVenta();
    $costoInternacional=$this->getValorImportacion();
    $precioVenta=$precioVenta+$costoInternacional;
    return $precioVenta;
}



    public function __toString(){
        return parent::__toString().", Pais: ".$this->pais.", Valor Importacion: ".$this->valorImportacion;
    }


}
?>