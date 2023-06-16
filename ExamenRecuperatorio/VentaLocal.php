<?php

/*Si la venta es en el local se debe almacenar un día y horario para coordinar la entrega del o las bicicleta/s, ese día
el sector de administración va a contar con toda la documentación lista para otorgar al cliente.
*/
    class VentaLocal extends Venta{
        private $diaHoraEntrega;
        private $documentacion;

        public function __construct($numero, $fecha, $cliente, $bicicletas, $precioFinal, $diaHoraEntrega,$documentacion) {
            parent::__construct($numero, $fecha, $cliente, $bicicletas, $precioFinal);
            $this->diaHoraEntrega = $diaHoraEntrega;
            $this->documentacion = $documentacion;
        }
        //Metodos de acceso
        public function getDiaHoraEntrega() {
            return $this->diaHoraEntrega;
        }
        public function getDocumentacion() {
            return $this->documentacion;
        }
        public function setDiaHoraEntrega($diaHoraEntrega) {
            $this->diaHoraEntrega = $diaHoraEntrega;
        }
        public function setDocumentacion($documentacion) {
            $this->documentacion = $documentacion;
        }

                ///Registrar Informacion de Venta
                public function registrarInformacionVenta($info){
                    $informacionPago=$this->getFormaPago();
                    $infoDiaHora=$this->getDiaHoraEntrega();
                    $arrayInfo=array_push($info,$informacionPago,$infoDiaHora);
                    parent::registrarInformacionVenta($arrayInfo);
                }  

        /**
        * Si la venta es en el local se debe almacenar un día y horario para coordinar la entrega del o las bicicleta/s, ese día
        *el sector de administración va a contar con toda la documentación lista para otorgar al cliente.
        * @param Bicicleta $objBici
        * @return boolean
        */
        public function incorporarBicicleta($objBici) {
            $retorna=false;
            $diaHoraEntrega=$this->getDiaHoraEntrega();
            if($objBici->getActiva()){//compruebo mi objeto si la bici esta activa para la venta
                if($diaHoraEntrega==true){
                    parent::incorporarBicicleta($objBici);
                    $retorna=true;
                }
            }
            return $retorna;
        }

        public function __toString(){
            return parent::__toString().", Dia y Hora Entrega: ".$this->diaHoraEntrega.", Documentacion: ".$this->documentacion;
        }
    }
?>