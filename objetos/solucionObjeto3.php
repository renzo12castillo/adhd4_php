<?php

    require_once("../clases/SolucionClase3.php"); 

    $operacion = new SolucionNumeroPar (); 
    $operacion->numero = $_POST['txt_numero'];
    
    if(isset($_POST['btn_deter_par_impar'])) {
        echo "<br>";
        echo $operacion->parImpar(); 
    }else {
        echo "<br>";
        echo "Error, intente nuevamente";
    }




?>