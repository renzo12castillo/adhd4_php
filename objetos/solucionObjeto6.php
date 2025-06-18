<?php

    require_once("../clases/SolucionClase6.php"); 

    $operacion = new Inverso(); 
    $operacion->texto = $_POST['txt_texto']; 

    if(isset($_POST['btn_revertir'])){
        echo "<br>";
        echo $operacion->invertirTexto(); 
    }else {
        echo "<br>";
        echo "Error, intente nuevamente";
    }


?>