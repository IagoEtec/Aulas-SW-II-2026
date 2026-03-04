<?php
$nomes = ["Bolsonaro", "Kobe Bryant", "Brunão", "Gustavo Lima"];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
<h1>Lista de Nomes</h1>

<div class="resultado">
    <?php
    foreach ($nomes as $nome) {
        echo $nome . "<br>";
    }
    ?>
</div>

</div>
</body>
</html>