<?php

    //a) Ler o arquivo JSON usando file_get_contents()
    $json_str = file_get_contents('usuarios.json');

    //b) Converter o JSON em um array PHP com json_decode()
    $usuarios = json_decode($json_str, true);

    //c) Exibir os nomes e emails de todos os usuários
    foreach ($usuarios as $usuario) {
        echo "Nome: " . $usuario['nome'] . " - Email: " . $usuario['email'] . "<br>";
    }