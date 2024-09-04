<?php 

function SomarNumeros ($x, $y) {
    if ($x <= 0 || $y <= 0) {
        echo "precusa ser positivo o numero! \n";
        return;
    }

    $começo = min($x, $y);
    $final = max($x, $y);

    $somar = 0;

    for ($i = $começo + 1; $i < $final; $i++) { // PONHEI O $começo +1 para ele comecar um numero depois e nao somar o inicio.
        $somar += $i;
    }

    echo "A soma dos números entre $começo e o $final é de: $somar \n";
}

SomarNumeros(readline("Digite o primeiro numero: "), readline("Digite o segundo numero: "));

