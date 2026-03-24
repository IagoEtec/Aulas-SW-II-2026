<?php

function mostra_array($vetor){
    foreach ($vetor as $valor) {
        echo $valor . "<br>";
        echo "<br>";
    }
}

function mostra_um($vetor2,$pos){
    echo $vetor2[$pos];
    echo "<br>";
}

$nomes = ["Bolsonaro","Squail O'neil","Gustavo Lima","Eder","Naruto"];
$numero = [1,2,3,4,5];

mostra_array($numero);

mostra_array($nomes);

mostra_um($nomes,1);


?>