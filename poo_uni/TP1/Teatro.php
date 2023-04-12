<?php
class Teatro{

    //Declaramos los Atributos
    private string $nombreTeatro;
    private string $direccionTeatro;
    private array $funcion;
   // private float $precio;
   // private string $nombreFuncion;
    
    //Creamos el metodo constructor
    public function __construct($nombreTeatro, $direccionTeatro, $funcion){
        $this->nombreTeatro=$nombreTeatro;
        $this->direccionTeatro=$direccionTeatro;
        $this->funcion=$funcion;

    }
    //----------------------------Getter
    public function getNombreTeatro(){
        return $this->nombreTeatro;
    }
    public function getDireccionTeatro(){
        return $this->direccionTeatro;
    }
    public function getFuncion(){
        return $this->funcion;
    }

    //-----------------Setter
    public function setNombreTeatro($nombreTeatro){
        $this->nombreTeatro=$nombreTeatro;
    }
    public function setDireccionTeatro($direccionTeatro){
        $this->direccionTeatro=$direccionTeatro;
    }
    public function setFuncion($funcion){
        $this->funcion=$funcion;
    }


    //Ingresar funciones al Teatro
    public function cargarFunciones($funciones){

        if(count($this->getFuncion())<=4){
            $obra=$this->getFuncion();
            array_push($obra,$funciones);
            $this->setFuncion($obra);
            $mensaje="Se ha registrado una nueva Funcion al teatro ". $this->getNombreTeatro()."\n";
        }else{
            $mensaje="El teatro ".$this->getNombreTeatro()." puede registrar otra función. Ha superado el maximo de presentaciones \n";
        }
        return $mensaje;
    }
    //Modificar funciones
    public function modificarFuncion($nombreFuncion,$nombreNuevo,$precioNuevo){
        $funciones=$this->getFuncion();

        foreach($funciones as &$funcion){
            if($funcion['nombreFuncion']=$nombreFuncion){
                $funcion['nombreFuncion']=$nombreNuevo;
                $funcion['precio']=$precioNuevo;
            
                $this->setFuncion($funcion);
                $mensaje="La funcion fue actualizada \n";
            }else{
                $mensaje="Existio un error, verifique el nombre de la funciona cambiar \n";
            }
        }
        return $mensaje;
        
    }
    //Eliminar funcion
    public function eliminarFuncion($nombreFuncion){
        $funciones=$this->getFuncion();

        foreach($funciones as $key=>$funcion){
            if($funcion['nombreFuncion']===$nombreFuncion){
                unset($this->funcion[$key]);
                $mensaje="La funcion fe eliminada del Teatro \n";
            }else{
                $mensaje="Existe un error, verifique el nombre \n";
            }
        }
        return $mensaje;
    }

    public function verFunciones(){
        $mensaje="Funciones Teatrales:\n";
        $i=0;
        foreach($this->getFuncion() as $funciones){
            $i++;
            $mensaje.= $i." ---- ".$funciones['nombreFuncion']." ----- Costo de entrada: $".$funciones['precio']." \n";
        }
        return $mensaje;
    }

    public function __toString()
    {
        $mensaje="Teatro ".$this->getNombreTeatro()." Dirección:".$this->getDireccionTeatro()."\n ";
        $mensaje.=$this->verFunciones()."\n";

        return $mensaje;
    }
}
?>