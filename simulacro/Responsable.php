<?php
class Responsable{
    /*En la clase Responsable:
1. Se registra la siguiente información: nombre, apellido, Nro de Documento, direccion,
mail y telefono.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos
definidos en la clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método toString para que retorne la información de los
atributos de la clase. */
    //Atributos - propiedades
    private $nombre;
    private $apellido;
    private $nroDoc;
    private $direccion;
    private $mail;
    private $tel;

    //Metodos - funciones
    public function __construct($nombre, $apellido, $nroDoc, $direccion, $mail, $tel)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->nroDoc=$nroDoc;
        $this->direccion=$direccion;
        $this->mail=$mail;
        $this->tel=$tel;
    }

    //Meteodos de acceso
    //////////////////////////getter
    public function getNombre(){
       return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
     }
     public function getnroDoc(){
        return $this->nroDoc;
     }
     public function getDireccion(){
        return $this->direccion;
     }
     public function getMail(){
        return $this->mail;
     }
     public function getTel(){
        return $this->tel;
     }
     ////////////////////////// FIN getter
     //////////////////////////Setter
     public function setNombre($nombre){
       $this->nombre=$nombre;
     }
     public function setApellido($apellido){
        $this->apellido=$apellido;
      }
      public function setNroDoc($nroDoc){
        $this->nroDoc=$nroDoc;
      }
      public function setDireccion($direccion){
        $this->direccion=$direccion;
      }
      public function setMail($mail){
        $this->mail=$mail;
      }
      public function setTel($tel){
        $this->tel=$tel;
      }
      //////////////////////////FIN setter
      public function __toString()
      {
        $mensaje="";
        $mensaje.="Responsable de Viaje \n
        Nombre y Apellido: ".$this->getNombre()." ".$this->getApellido()."\n
        Direccion: ".$this->getDireccion()."\n
        Telefono: ".$this->getTel()."\n
        Mail: ".$this->getMail()."\n";

        return $mensaje;
      }

}


?>