<?php

    $valor_produto = readline("Digite o valor do produto: ");
    $porcentagem_ajuste = 1;

    $novo_aumento = $valor_produto * (1 + $porcentagem_ajuste / 100);

    echo "O novo preço do produto com reajuste de 1% é $novo_aumento \n";
    