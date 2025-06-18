<?php

require_once("../clases/SolucionClase10.php"); 

$operacion = new ContadorVocales();
$operacion->texto = $_POST['txt_vocales']; 

if (isset($_POST['btn_vocales'])) {
    echo "<br>";
    echo "Número de vocales: " . $operacion->contar();
}

?>
