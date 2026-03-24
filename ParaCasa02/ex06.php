<?php

$quantidade = 10;

function gerarArray($qtd) {
    $numeros = array();

    for ($i = 0; $i < $qtd; $i++) {
        $numeros[] = rand(1, 100);
    }

    return $numeros;
}

$resultado = gerarArray($quantidade);

print_r($resultado);

?>