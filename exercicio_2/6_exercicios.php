<?php

    $valor_1 = readline("Digite o valor do primeiro numero: ");
    $valor_2 = readline("Digite o valor do segundo numero: ");

    if ($valor_1 == $valor_2){
        echo "Erro! Voce precisa digitar valores diferentes! \n";
    } else if ($valor_1 > $valor_2){
        echo " $valor_1";
    } else if ($valor_1 < $valor_2) {
        echo " $valor_2";
    }