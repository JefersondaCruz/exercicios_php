<?php

    $numero_1 = readline("Digite o primerio numero; ");
    $numero_2 = readline("Digite o segundo numero; ");
    $numero_3 = readline("Digite o terceiro numero; ");
    $numero_4 = readline("Digite o quarto numero; ");

    $pesos = 1 + 2 + 3 + 4;
    $media_ponderada = ($numero_1 * 1 + $numero_2 * 2 + $numero_3 * 3 + $numero_4 * 4) / $pesos;
    

    echo " media ponderada é $media_ponderada \n";