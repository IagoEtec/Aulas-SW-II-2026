<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício PHP</title>

    <style>
        body {
            background-color: #000;
            color: #ff0000;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        hr {
            border: 1px solid #ff0000;
            width: 80%;
            margin: 20px auto;
        }

        .box {
            background-color: #111;
            border: 2px solid #ff0000;
            padding: 20px;
            margin: 30px auto;
            width: 60%;
            border-radius: 10px;
            box-shadow: 0 0 15px #ff0000;
        }
    </style>
</head>

<body>

<div class="box">

<?php

$a = 10;
$b = 5;

$soma = $a + $b;

echo "A soma é: $soma";

echo "<hr>";

// ESTRUTURAS CONDICIONAIS
if ($b > $a) {
    echo "B é maior que A";
} else {
    echo "B não é maior que A";
}

echo "<hr>";

$n1 = 4;
$n2 = 5;
$n3 = 6;

$media = ($n1 + $n2 + $n3) / 3;

echo "SUA MÉDIA É: $media : ";

if ($media > 5) {
    echo "APROVADO";
} else {
    if ($media < 4) {
        echo "REPROVADO";
    } else {
        echo "RECUPERAÇÃO";
    }
}

echo "<hr>";

$dia = 2;

switch ($dia) {
    case 1:
        echo "DOMINGO";
        break;
    case 2:
        echo "SEGUNDA";
        break;
    case 3:
        echo "TERÇA";
        break;
    default:
        echo "NÚMERO INVÁLIDO";
        break;
}

echo "<hr>";

for ($i = 1; $i <= 10; $i++) {
    echo "$i - ";
}

echo "<hr>";

$a = 1;
while ($a <= 10) {
    echo "$a - ";
    $a++;
}

echo "<hr>";

$x = 1;
do {
    echo "$x - ";
    $x++;
} while ($x <= 10);

echo "<hr>";

$nomes = ['FULANO', 'BELTRANO', 'CICLANO', 'ANDERSON'];

echo $nomes[0] . "<br>";
echo $nomes[1] . "<br>";
echo $nomes[2] . "<br>";

echo "<hr>";

foreach ($nomes as $nome) {
    echo "$nome <br>";
}

?>

</div>

</body>
</html>