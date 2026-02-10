<?php
$texto = <<<HINO
Ouviram do Ipiranga as margens plácidas  
De um povo heroico o brado retumbante,  
E o sol da liberdade, em raios fúlgidos,  
Brilhou no céu da Pátria nesse instante.  

Se o penhor dessa igualdade  
Conseguimos conquistar com braço forte,  
Em teu seio, ó liberdade,  
Desafia o nosso peito a própria morte!  

Ó Pátria amada,  
Idolatrada,  
Salve! Salve!  

Brasil, um sonho intenso, um raio vívido  
De amor e de esperança à terra desce,  
Se em teu formoso céu, risonho e límpido,  
A imagem do Cruzeiro resplandece.  

Gigante pela própria natureza,  
És belo, és forte, impávido colosso,  
E o teu futuro espelha essa grandeza.  

Terra adorada,  
Entre outras mil,  
És tu, Brasil,  
Ó Pátria amada!  

Dos filhos deste solo és mãe gentil,  
Pátria amada,  
Brasil!
HINO;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Hino Nacional Brasileiro</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;

            background-image: url("wallpaper.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            font-family: "Georgia", serif;
            color: #f1f1f1;
        }

        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 0;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 900px;
            padding: 50px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.8);
            animation: fadeIn 1.2s ease;
        }

        .title {
            text-align: center;
            font-size: 2.5rem;
            letter-spacing: 3px;
            margin-bottom: 35px;
            color: #2ecc71;
            text-transform: uppercase;
        }

        .lyrics {
            white-space: pre-line;
            line-height: 2;
            font-size: 1.1rem;
            color: #f0f0f0;
            text-align: center;
        }

        footer {
            margin-top: 40px;
            text-align: center;
            font-size: 0.85rem;
            color: #bbb;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="title">Hino Nacional Brasileiro</div>

        <div class="lyrics">
            <?php echo $texto; ?>
        </div>

        <footer>
            República Federativa do Brasil 🇧🇷
        </footer>
    </div>

</body>