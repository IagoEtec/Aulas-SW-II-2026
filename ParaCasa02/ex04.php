<?php

$numero = 5;

function tabuada($num) {
    for ($i = 1; $i <= 10; $i++) {
        echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
    }
}

tabuada($numero);

?>