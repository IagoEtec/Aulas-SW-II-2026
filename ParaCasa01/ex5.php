<?php $seila = 1; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
<h1>Contagem Nacional</h1>

<div class="resultado">
<?php
while ($seila <= 10) {
    echo $seila . "<br>";
    $seila++;
}
?>
</div>

</div>
</body>
</html>