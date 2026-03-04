<?php $numero = 5; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
<h1>Tabuada Brasileira</h1>

<div class="resultado">
    <?php
    for ($esmegba = 1; $esmegba <= 10; $esmegba++) {
        echo "$numero x $esmegba = " . ($numero * $esmegba) . "<br>";
    }
    ?>
</div>

</div>
</body>
</html>