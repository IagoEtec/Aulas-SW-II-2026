<?php $numero = 8; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
<h1>Par ou Ímpar</h1>

<div class="resultado">
    <?php
    if ($numero % 2 == 0) {
        echo "Número par";
    } else {
        echo "Número ímpar";
    }
    ?>
</div>

</div>

</body>
</html>