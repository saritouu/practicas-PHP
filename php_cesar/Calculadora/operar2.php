<?php
if(isset($_REQUEST['valor1'])){
    $num1 = $_REQUEST['valor1'];
    $num2 = $_REQUEST['valor2'];
    $op = $_REQUEST['operacion'];

    if (validar($num1, $num2)){
        $res = 0;
        if($op == "suma"){
            $res = sumar($num1,$num2);
            echo "El resultado es: $res";
        
        }else if($op == "resta"){
            $res = restar($num1,$num2);
            echo "El resultado es: $res";
        
        }else if($op == "multiplicar"){
            $res = multiplicar($num1,$num2);
            echo "El resultado es: $res";

        }else if($op == "dividir"){
            if($num2 != 0) {
                $res = dividir($num1,$num2);
                echo "El resultado es: $res";
            }else{
                echo "No se puede dividir por cero";
            }
        }
    }else{
        header("Location: index.php");
        exit();
    }
}

function validar($x, $y){
    if (empty($x) || empty($y)){
        return "";
    }else{
        return "1";
    }
}
function sumar($n1, $n2){
    return $n1 + $n2;
}
function restar($n1, $n2){
    return $n1 - $n2;
}
function multiplicar($n1, $n2){
    return $n1 * $n2;
}
function dividir($n1, $n2){
    return $n1 / $n2;
}
?>