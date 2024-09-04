<?php 

    $numeros= [];

    for ($i = 0; $i <= 10; $i++) {
        do {     // fazer com que so numero positivo seja lido
            $numero = (int)readline("Digite um numero positivo: ");

            if ($numero <= 0) {
                echo "Digite um número maior que 0!\n";
            }
        } while ($numero <= 0); 
    
        $numeros[$i] = $numero; // salvar na arrey

        }

        $ValorMaior = $numeros[0];
        $posicao = 0;

        for ($i = 1; $i < 10; $i++) {

            if ($numeros[$i] > $ValorMaior) {
                $ValorMaior = $numeros[$i];
                $posicao = $i;
            }

        }

        echo "O maior valor é $ValorMaior e a posição é: " . ($posicao + 1) . "\n";
        



        