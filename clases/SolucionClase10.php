<?php

class ContadorVocales {
    public $texto;

    public function contar() {
        $vocales = 0;
        $texto = strtolower($this->texto); 

        for ($i = 0; $i < strlen($texto); $i++) {
            if (in_array($texto[$i], ['a', 'e', 'i', 'o', 'u'])) {
                $vocales++;
            }
        }

        return $vocales;
    }
}

?>
