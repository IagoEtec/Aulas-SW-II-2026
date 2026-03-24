<?php

$numero = 7;

function parOuImpar($num) {
    if ($num % 2 == 0) {
        echo "O número é Par";
    } else {
        echo "O número é Ímpar";
    }
}

parOuImpar($numero);

?>