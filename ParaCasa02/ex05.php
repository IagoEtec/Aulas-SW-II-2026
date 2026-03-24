<?php

$lista = array(1, 2, 3, 4, 5);

function somaArray($lista) {
    $soma = 0;

    for ($i = 0; $i < count($lista); $i++) {
        $soma = $soma + $lista[$i];
    }

    return $soma;
}

$resultado = somaArray($lista);

echo "A soma é: " . $resultado;

?>