<?php

function soma($x, $y){
    $soma = $x + $y;
    return $soma;
}

function resto($num){
    return $num % 2;
}

$num1 = 8;
$num2 = 8;

echo soma($num1, $num2);

$resultado = resto($num1);

if ($resultado == 0) {
    echo " PAR";
} else {
    echo " ÍMPAR";
}

?>