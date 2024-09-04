<?php

    function soma ($x, $i) {
        return $x + $i;
    }

    function subtracao ($x, $i) {
        return $x - $i;
    }

    function multiplicação ($x, $i) {
       return $x * $i;
    }

    function divisao ($x, $i) {
        return $x / $i;
    }

    $escolha_funcao = readline("1 - para soma, 2 - subtração, 3 - multiplicação, 4 - divisao: ");
    $numero_1 = readline(" Digite o primerio numero: ");
    $numero_2 = readline("Digite o segundo numero : ");

    switch ($escolha_funcao) {
        case 1:
            $resutado  = soma($numero_1, $numero_2);
            echo "O resultado da soma é : $resutado \n";
            break;
        case 2:
            $resutado = subtracao($numero_1, $numero_2);
            echo "O resultado da subtração é : $resutado \n";
            break;
        case 3:
            $resutado = multiplicação($numero_1, $numero_2);
            echo "O resultado da multiplicação é : $resutado \n";
            break;
        case 4;
            $resutado = divisao($numero_1, $numero_2);
            echo "O resutado da divisão é : $resutado \n";
            break;
        default:
            echo "Erro! Digite um numero válido! \n";
            break;
    }