<?php

    $numeros = [];

    $contagemPositivos = 0;
    $contagemNegativos = 0;
    $contagemPares = 0;
    $contagemImpares = 0;
    
    for ($i = 0; $i < 10; $i++) {

        $numeros[$i] =(int) readline("Digite algum numero: ");

        if ($numeros[$i] < 0 ) {
            $contagemNegativos++;
        } else if($numeros[$i] > 0) {
            $contagemPositivos++;
        }

        if ($numeros[$i] % 2 == 0) {
            $contagemPares++;
        } else {
            $contagemImpares++;
        }

    }

    echo "À quantidade de numeros positivos é: $contagemPositivos \n";
    echo "À quantidade de numeros negativos é: $contagemNegativos \n";
    echo "À quantidade de numeros pares é: $contagemPares \n";
    echo "À quantidade de numeros Impares é: $contagemImpares \n";
    

   