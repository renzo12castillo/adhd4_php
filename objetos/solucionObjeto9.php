<?php
require_once("../clases/SolucionClase9.php"); 
$operacion = new Primo(); 

if (isset($_POST['btn_calc_primo'])) {
    $numero = $_POST['txt_primo'];  
    echo "<br>";

    if ($operacion->esPrimo($numero)) {
        echo "Es un número primo";
    } else {
        echo "No es un número primo";
    }
}
?>
