<?php

    class SolucionAreaTriangulo {
        public $base; 
        public $altura;
        private $resultado; 

        public function area (){
            $this->resultado = ($this->base * $this->altura) / 2; 
            return "El area del triangulo es: .$this->resultado cm²"; 
        }
    }




?>