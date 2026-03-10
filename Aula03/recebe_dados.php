<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEBE DADOS</title>
</head>
<body>
    <?php
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade'];
    ?>

    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>O idade é: <?php echo $idade; ?></p>

    <?php
        $ano_atual = date("Y");
        $dataN = ($ano_atual - $idade);      
    ?>

    <?php
    if ($idade < 18) {
        echo '<p style="color: red;">  Você é menor de idade fiote </p>';
    } elseif ($idade >= 18) {
        echo '<p style="color: green;">  Você é maior de idade já </p>';
    }
    ?>

    <p>Ahh então você nasceu no ano de <?php echo $dataN; ?></p>
</body>
</html>