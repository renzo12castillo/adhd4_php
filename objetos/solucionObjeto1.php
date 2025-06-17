<?php

    require_once("../clases/SolucionClase1.php"); 

    $operacion = new SolucionClase1 ();

    $operacion->valor1 = $_POST['txt_valor_1'];
    $operacion->valor2 = $_POST['txt_valor_2'];
    $operacion->valor3 = $_POST['txt_valor_3'];

    if(isset($_POST['btn_calcular'])) {
        echo "<br>";
        echo $operacion->promedio(); 
    }else {
        echo "<br>";
        echo "Error, intentenuevamente";
    }

?>