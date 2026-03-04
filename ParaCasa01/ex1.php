<?php
$nome = "Iago";
$idade = 17;
$cidade = "Ali ó (interior do maranhão)";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
<h1>🇧🇷 Dados do Brasileiro 🇧🇷</h1>

<div class="resultado">
    <?php
    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Cidade: $cidade";
    ?>
</div>

</div>
</body>
</html>