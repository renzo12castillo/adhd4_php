<?php

    class Perfecto {
        public $numero; 

        public function encontrarPerfecto(){
            if($this->numero <= 0){
                return false; 
            }
            $suma = 0; 
            for($i = 1; $i <= $this->numero / 2; $i++){
                if($this->numero % $i == 0) {
                    $suma += $i;
                }
            }
            return $suma == $this->numero;
        }
    }

?>