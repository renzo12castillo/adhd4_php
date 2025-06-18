<?php

    class Inverso {
        public $texto; 
        private $resultado; 

        public function invertirTexto() {
            $this->resultado = strrev($this->texto); 
            echo "$this->resultado"; 
        }
    }


?>