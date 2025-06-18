<?php

    class MayorMenor {
        public $numero1;
        public $numero2;
        public $numero3; 

        public function mayorMenorEncontrar () {
            $mayor = max($this->numero1, $this->numero2, $this->numero3); 
            $menor = min($this->numero1, $this->numero2, $this->numero3); 

            echo "El numero mayor es {$mayor}<br>"; 
            echo "El numero menor es {$menor}<br>"; 
        }
    }


?>