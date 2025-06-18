<?php

    class Factorial {
        public $numero; 
        private $resultado; 

        public function calcularFactorial(){
            if($this->numero < 0) {
                return "No se puede calcular el factorial de un numero negativo"; 
            }

            $this->resultado = 1; 
            for($i = 1; $i <= $this->numero; $i++) {
                $this->resultado *= $i; 
            }
            return $this->resultado; 
        }
    }


?>