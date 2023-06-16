<?php
/*Si la venta es on-line se debe almacenar: dirección de envío, DNI de quien recepciona la entrega y número de
teléfono de contacto. Además hay que tener en cuenta para estas ventas, un costo de transporte que va a afectar al importe
total de la venta, produciendo un incremento del un 15%.
 */
    class VentaOnLine extends Venta{
        private $direccion;
        private $dniRecepciona;
        private $telefonoContacto;
        private $costoTransporte;

        public function __construct($numero, $fecha, $cliente, $bicicletas, $precioFinal, $formaPago,$direccion,$dniRecepciona,
        $telefonoContacto,$costoTransporte=15) {
            parent::__construct($numero, $fecha, $cliente, $bicicletas, $precioFinal, $formaPago);
            $this->direccion = $direccion;
            $this->dniRecepciona = $dniRecepciona;
            $this->telefonoContacto = $telefonoContacto;
            $this->costoTransporte = $costoTransporte;
        }
        
        // Métodos de acceso
        public function getDireccion() {
            return $this->direccion;
        }
        public function getDniRecepciona() {
            return $this->dniRecepciona;
        }
        public function getTelefonoContacto() {
            return $this->telefonoContacto;
        }
        public function getCostoTransporte() {
            return $this->costoTransporte;
        }
        public function setDireccion($direccion) {
            $this->direccion = $direccion;
        }
        public function setDniRecepciona($dniRecepciona) {
            $this->dniRecepciona = $dniRecepciona;
        }
        public function setTelefonoContacto($telefonoContacto) {
            $this->telefonoContacto = $telefonoContacto;
        }
        public function setCostoTransporte($costoTransporte) {
            $this->costoTransporte = $costoTransporte;
        }
        ///Registrar Informacion de Venta
        public function registrarInformacionVenta($info){
            $informacionPago=$this->getFormaPago();
            $informacionDireccion=$this->getDireccion();
            $arrayInfo=array_push($info,$informacionPago,$informacionDireccion);
            parent::registrarInformacionVenta($arrayInfo);
        }    
        public function incorporarBicicleta($objBici) {
            $costoEnvio=$this->getCostoTransporte();
            $precioFinal=$this->getPrecioFinal();
            
            $this->setPrecioFinal($precioFinal);
            $retorna=false;

            if($objBici->getActiva()){//compruebo mi objeto si la bici esta activa para la venta
                array_push($arregloBicicletas, $objBici); //array_push me sirve para incorporar en mi canasto mi nueva bici
                $this->setBicicletas($arregloBicicletas); //y el set bicicletas para modificar el arreglo con la bici nueva
                $precioFinal+=$objBici->darPrecioVenta();//al subtotal le sumo lo ultimo que meti a mi canasto    
                $precioFinal=$precioFinal+($precioFinal*$costoEnvio/100);
                $this->setPrecioFinal($precioFinal);//Y aqui actualizamos el valor de la venta con la ultima bici agregada
                $retorna=true;
            }
            return $retorna;
        }

        public function __toString(){
            return parent::__toString().", Direccion: ".$this->direccion.", DNI Recepciona: ".$this->dniRecepciona.", Telefono Contacto: ".$this->telefonoContacto.", Costo Transporte: ".$this->costoTransporte;
        }
    }



?>