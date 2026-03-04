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
echo ($numero % 2 == 0) ? "Número par" : "Número ímpar";
?>
</div>

</div>
</body>
</html>