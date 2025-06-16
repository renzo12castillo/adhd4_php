<?php

    class SolucionClase1 {
        public $valor1; 
        public $valor2; 
        public $valor3; 

        private $resultado; 

        public function promedio () {
            $this->resultado = ($this->valor1 + $this->valor2 + $this->valor3) / 3;
            return "El promedio es: " .$this->resultado;
        }
    }


?>