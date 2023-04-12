<?php
class CuentaBancaria{
    //Atributos
    private int $numeroCta;
    private int $dniCliente;
    private float $saldoActual;
    private float $interesAnual;
    //Metodo Constructor

    public function __construct($numeroCta, $dniCliente, $saldoActual, $interesAnual){
        //En el metodo constructor definiremos los atributos con los valores ingresantes

        $this->numeroCta=$numeroCta;
        $this->dniCliente=$dniCliente;
        $this->saldoActual=$saldoActual;
        $this->interesAnual=$interesAnual;
    }
    //Metodo de acceso
    //--------------------------Getter
    public function getNumeroCta(){
        return $this->numeroCta;
    }
    public function getDniCliente(){
        return $this->dniCliente;
    }
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    public function getInteresAnual(){
        return $this->interesAnual;
    }
    //--------------------------Setter
    public function setNumeroCta($numeroCta){
        $this->numeroCta=$numeroCta;
    }
    public function setDniCliente($dniCliente){
        $this->dniCliente=$dniCliente;
    }
    public function setSaldoActual($saldoActual){
        $this->saldoActual=$saldoActual;
    }
    public function setInteresAnual($interesAnual){
        $this->interesAnual=$interesAnual;
    }

    //Metodos creados

    //Se debe crear un metodo que nos permita actualizar el Saldo, el mismo se debe aplicar el interes diario ( interes anual dividido por 365 aplicado al saldo actual)
    public function actualizarSaldo($saldoActual){
       $saldo=$this->getSaldoActual();
       $interesAnual=$this->getInteresAnual();
       $interesDiario=($interesAnual/365);
       $actualizarSaldo=$saldo+($saldo*$interesDiario);
       $this->setSaldoActual($actualizarSaldo);
    }

    //Se debe crear un metodo que aumente el saldo cuando uno ingrese una cantidad
    public function depositar($cant){
        if($cant>0){
        $saldo=$this->getSaldoActual();
        $saldo+=$cant;
        $this->setSaldoActual($saldo);
            $mensaje="Su desposito se realizo correctamente, su saldo actual es:". $this->getSaldoActual()."\n";
        }else{
            $mensaje="No Puede ingresar una cantidad menor a 0 \n";
        }

        return $mensaje;
    }

    //Se debe crear un metodo que permita retirar plata de la cuenta, teniendo en cuenta que no puede sacar si no hay saldo
    public function retirar($cant){
        $saldo=$this->getSaldoActual();
        if($saldo>$cant){
            $saldo-=$cant;
            $this->setSaldoActual($saldo);
            $mensaje="Fueron retirados correctamente la cantidad: $".$cant." de su Cuenta, su saldo actual es: $".$this->getSaldoActual()."\n";
        }else{
            $mensaje="No posee fondos sufisientes para realizar el retiro, pruebe con un monto menor \n";
        }
        return $mensaje;
    }

    //Redefiniento el metodo __toString()
    public function __toString()
    {
        $mensaje="Nro de Cuenta: ".$this->getNumeroCta()."\n
        DNI Cliente: ".$this->getDniCliente()."\n 
        Saldo Actual: $".round($this->getSaldoActual(),2)."\n
        Interes Anual: ".($this->getInteresAnual()*100)." % \n";
        return $mensaje;
    }
 }


?>