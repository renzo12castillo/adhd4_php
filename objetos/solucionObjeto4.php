<?php

    require_once("../clases/SolucionClase4.php"); 

    $operacion = new MayorMenor();
    $operacion->numero1 = $_POST['txt_primero']; 
    $operacion->numero2 = $_POST['txt_segundo']; 
    $operacion->numero3 = $_POST['txt_tercer']; 

    if(isset($_POST['btn_determinar_my_mn'])){
        echo "<br>";
        echo $operacion->mayorMenorEncontrar(); 
    }else {
        echo "<br>";
        echo "Error, intente nuevamente";
    }


?>