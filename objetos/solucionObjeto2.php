<?php

    require_once ("../clases/SolucionClase2.php"); 

    $operacion = new SolucionAreaTriangulo (); 

    $operacion->base = $_POST['txt_base']; 
    $operacion->altura = $_POST['txt_altura']; 

    if(isset($_POST['btn_encontrar_area'])) {
        echo "<br>";
        echo $operacion->area(); 
    }else {
        echo "<br>";
        echo "Error, intentenuevamente";
    }

?>