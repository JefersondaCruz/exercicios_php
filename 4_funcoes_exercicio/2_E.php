<?php

    // $escolha = readline("1 - Masculino, 2 - Feminino");
    // $altura = readline("Digite sua altura");


    function IdealMasculino ($escolha,$altura) {

        if ($escolha == 1) {
            $soma = 72.2 * $altura - 58;
            echo "o seu peso ideal é: $soma";
        } else if ($escolha == 2) {
            $soma = 62.1 * $altura - 44.7;
            echo "o seu peso ideal é: $soma";
        } else {
            "Valor inserido incorreto";
        }
        
    }

    echo IdealMasculino(readline("1 - Masculino, 2 - Feminino: "), readline("Digite sua altura: "));

    