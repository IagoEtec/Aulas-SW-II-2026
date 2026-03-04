<?php $opcao = 2; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
<h1>Menu de Opções</h1>

<div class="resultado">
    <?php
    switch ($opcao) {
        case 1:
            echo "Opção 1 escolhida";
            break;
        case 2:
            echo "Opção 2 escolhida";
            break;
        default:
            echo "Opção inválida";
    }
    ?>
</div>

</div>
</body>
</html>