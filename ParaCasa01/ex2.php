<?php $numero = 5; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
<h1>Verificação Numérica</h1>

<div class="resultado">
    <?php
    if ($numero > 0) {
        echo "Positivo";
    } elseif ($numero < 0) {
        echo "Negativo";
    } else {
        echo "Zero";
    }
    ?>
</div>

</div>
</body>
</html>