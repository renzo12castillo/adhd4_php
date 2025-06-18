<?php

    class SolucionNumeroPar {
        public $numero; 
        private $resultado; 

        public function parImpar () {
            $this->resultado = $this->numero % 2 == 0; 

            if($this->resultado) {
                return "El numero {$this->numero} es par."; 
            } else {
                return "El numero {$this->numero} es impar.";
            }
        }
    }

?>