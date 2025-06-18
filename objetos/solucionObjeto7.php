<?php

    require_once("../clases/SolucionClase7.php"); 
    $operacion = new Factorial(); 
    $operacion->numero = $_POST['txt_factorial']; 

    if(isset($_POST['btn_calc_factorial'])){
        echo "<br>";
        echo $operacion->calcularFactorial(); 
    }else {
        echo "<br>";
        echo "Error, intente nuevamente";
    }


?>