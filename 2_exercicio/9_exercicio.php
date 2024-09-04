<?php 

    $numero = readline("Digite um numero: ");

    if ($numero >= 30 && $numero <= 90 ) {
        echo "O numero é $numero e esta entre 30 e 90.";

    } else if ($numero >= 120) {
        echo "O numero é $numero e é maior que 120";
    } else {
        echo "Nao se encaixa a nenhuma das condições";
    }