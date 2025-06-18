<?php

    require_once("../clases/SolucionClase5.php"); 

    $operacion = new Potencia(); 
    $operacion->base = $_POST['txt_base']; 
    $operacion->exponente = $_POST['txt_exponente']; 

    if(isset($_POST['btn_elevar'])){
        echo "<br>";
        echo $operacion->operacionPotencia(); 
    }else {
        echo "<br>";
        echo "Error, intente nuevamente";
    }


?>