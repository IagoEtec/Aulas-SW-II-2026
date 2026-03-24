<?php

$numero = 5;

function fatorial($num) {
    $resultado = 1;

    for ($i = 1; $i <= $num; $i++) {
        $resultado = $resultado * $i;
    }

    return $resultado;
}

echo "Fatorial de " . $numero . " é: " . fatorial($numero);

?>