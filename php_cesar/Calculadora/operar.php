<?php
if ($_REQUEST['operacion'] == "suma") {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:" . $suma;
} 
elseif($_REQUEST['operacion'] == "resta") {
    $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
    echo "La resta es:" . $resta;
}
elseif($_REQUEST['operacion'] == "multiplicar") {
    $multiplicacion = $_REQUEST['valor1'] * $_REQUEST['valor2'];
    echo "La multiplicación es:" . $multiplicacion;
}else($_REQUEST['operacion'] == "dividir") {
    $division = $_REQUEST['valor1'] / $_REQUEST['valor2'];
    echo "La división es:" . $division;    
}
?>