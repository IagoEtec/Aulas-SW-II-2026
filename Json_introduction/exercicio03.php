<?php

    //a) Ler o JSON do arquivo e convertê-lo para um array
    $json_str = file_get_contents('produtos.json');
    $produtos = json_decode($json_str, true);

    //b) Adicionar um novo produto ao array
    $novo_produto = array(
        'nome' => 'Coxinha',
        'preco' => 3.99,
        'quantidade' => 30
    );
    $produtos[] = $novo_produto;

    //c) Converter o array atualizado para JSON e salvar de volta no arquivo
    $json_str_atualizado = json_encode($produtos);
    file_put_contents('produtos.json', $json_str_atualizado);