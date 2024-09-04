<?php

    $qtd_maca = readline("Digite quantas macas voce comprou: ");
    $maca = 1.30;
    $maca_desconto = 1.00;

    if ($qtd_maca <= 12) {
        $valor_total = $qtd_maca * $maca;
        echo "o valor total é de $valor_total";
    } else {
        $valor_total = $qtd_maca * $maca_desconto;
        echo "O valor total com desconto é ";
    }