<?php
    $produtos = array(
        array(
            'nome' => 'Pão de queijo',
            'preco' => 10.99,
            'quantidade' => 20
        ),
        array(
            'nome' => 'Feijoada',
            'preco' => 5.49,
            'quantidade' => 10
        ),
        array(
            'nome' => 'Maças do amor',
            'preco' => 20.00,
            'quantidade' => 50
        )
    );

    $json_str = json_encode($produtos);
    file_put_contents('produtos.json', $json_str);
?>