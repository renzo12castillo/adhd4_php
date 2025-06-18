<?php

    require_once("../clases/SolucionClase8.php"); 
    $operacion = new Perfecto(); 
    $operacion->numero = $_POST['txt_perfecto']; 

    if(isset($_POST['btn_calc_perfecto'])){
        echo "<br>";
        if($operacion->encontrarPerfecto()){
        echo "Es un numero perfecto";
    } else {
        echo "No es un numero perfecto";
    }
}


?>