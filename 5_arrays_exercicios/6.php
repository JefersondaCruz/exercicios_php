<?php

    $vetor_a = [];
    $vetor_b = [];

    for ($i = 0; $i < 10; $i++) {
        $vetor_a[$i] = (int) readline("Digite o numero para o vetor A: ");
    }



    for ($i = 0; $i < 10; $i++) {
        $vetor_b[$i] = (int) readline("Digite o numero para o vetor B: ");
    }

    $resultados = [];

    for ($i = 0; $i < 10; $i++) {
        $resultados[$i] = $vetor_a[$i] * $vetor_b[$i]; 
    }

        echo "Resultados: \n";
        print_r($resultados) . "\n";
    

    