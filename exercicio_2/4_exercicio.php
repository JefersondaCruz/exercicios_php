<?php

    $notas_1 = (float)readline("Digite a  sua nota na 1 Avaliação: ");
    $notas_2 = (float)readline("Digite a sua nota na 2 Avaliação: ");

    $media = ($notas_1 + $notas_2) / 2;

    if ( $media >= 6) {
        
        echo "Voce foi aprovado \n";
    } else {
        echo "Você foi reprovado";
    }
