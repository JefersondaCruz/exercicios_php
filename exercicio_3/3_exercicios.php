<?php

$soma = 0;
echo "Digite 0 para a operação parar: \n";

for ($contador = 1; $contador <= 10; $contador++) {

    $numero = readline("Digite um numero: ");

    $soma += $numero; 
        if ($numero == 0) {
            echo "a operação parou \n";
            break;
        }
}
    echo "A soma entre todos os numeros é: $soma \n";
    $media = $soma / $contador;
    echo "A media é : $media \n"; 
    echo "A quantidade de valores lidos é $contador \n";