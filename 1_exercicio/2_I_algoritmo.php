<?php

    $salario_fixo_mensal = 2000;
    $comisso_por_carro = 200;
    // 5% das vendas totais realizadas pelo vendedor
    $carros_vendidos = readline("Digite quantos carros voce vendeu: ");
    $valor_total_vendas = readline("Digite qual foi a quantia total que você vendeu: ");

    $valor_comissao_carros_total = $comisso_por_carro * $carros_vendidos;
    $valor_comissao_das_vendas = $valor_total_vendas * (5 / 100);

    $salario_final = $valor_comissao_carros_total + $valor_comissao_das_vendas;

    echo "Seu salário fixo é $salario_fixo_mensal \n";
    echo "Sua comissão por carros vendidos é $valor_comissao_carros_total \n";
    echo "E sua comissao de 5% do valor total de vendas é de $valor_comissao_das_vendas \n";

    echo "Sendo assim, seu salario final é de R$ $salario_final \n";
    

