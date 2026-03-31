<?php

$json_str = '{"nome":"Jason Jones","idade":38,"sexo":"M"}';


$obj = json_decode($json_str);


echo "<pre>";
var_dump($obj);
echo "</pre>";

echo "<hr>";


echo "Nome: " . $obj->nome . "<br>";
echo "Idade: " . $obj->idade . "<br>";
echo "Sexo: " . $obj->sexo . "<br>";

?>