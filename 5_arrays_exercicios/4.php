<?php 

    $a = [];

    for ($i = 0; $i < 10; $i++) {
        $a[$i] = (int)readline("Digite um numero: ");
    }

    $b = (int)readline("Digite o ultimo valor para a variavel B: ");

    $c = [];

    for ($i = 0; $i < 10; $i++) {
        $c[$i] = $a[$i] * $b;
    }  
    
    foreach ($c as $valor) {
        echo $valor . "\n";
    } 