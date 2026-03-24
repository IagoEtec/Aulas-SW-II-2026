<?php

function exibe_msg(){
    $x = "Retorno da função <br>";

    return $x;

}

// $abc = exibe_msg();
// echo $abc*2;

for ($i=0; $i < 4 ; $i++) { 
    echo exibe_msg();
}


?>