<?php

class Potencia {
    public $base; 
    public $exponente; 
    private $resultado; 

    public function operacionPotencia(){
        $this->resultado = $this->base ** $this->exponente; 
        echo "El resultado es $this->resultado"; 
    }
}


?>