
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bolsonaro 1000 grau</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, sans-serif;
        }

        body {
            min-height: 100vh;

            background-image: url("wallpaper.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* overlay escuro */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            z-index: 0;
        }

        .card {
            position: relative;
            z-index: 1;

            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);

            padding: 30px 35px;
            width: 340px;

            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);

            color: #fff;
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .info {
            margin-bottom: 12px;
            font-size: 18px;
        }

        .label {
            font-weight: 600;
            opacity: 0.85;
        }

        .status {
            margin-top: 18px;
            padding: 10px;
            text-align: center;
            border-radius: 12px;
            font-weight: 600;
        }

        .ativo {
            background: rgba(46, 204, 113, 0.85);
        }

        .inativo {
            background: rgba(231, 76, 60, 0.85);
        }
    </style>
</head>
<body>

<?php
    $nome = "Jair Messias Bolsonaro";
    $idade = 70;
    $preco = 999999999999.99;
    $ativo = false;

    //    $nome = "Jair Messias Bolsonaro";
    //    $idade = "70";
    //    $preco = "999999999999.99";
    //    $ativo = false;
    //   echo "Nome: " . $nome . "<br>";
    //    echo "Idade: " . $idade . "<br>";
    //    echo "Preço: " . $preco . "<br>";
    //  echo "Status: " . ($ativo ? "Ativo" : "Inativo");
    
?>

<div class="card">
    <h2>Perfil</h2>

    <div class="info">
        <span class="label">Nome:</span>
        <?= $nome ?>
    </div>

    <div class="info">
        <span class="label">Idade:</span>
        <?= $idade ?>
    </div>

    <div class="info">
        <span class="label">Preço:</span>
        R$ <?= number_format($preco, 2, ',', '.') ?>
    </div>

    <div class="status <?= $ativo ? 'ativo' : 'inativo' ?>">
        <?= $ativo ? 'Ativo' : 'Inativo' ?>
    </div>
</div>

</body>
</html>