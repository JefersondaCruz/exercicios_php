<?php 

    $base = readline("Digite a base do retângulo: ");
    $altura = readline("Digite a altura do retângulo: ");

    $calc_perímetro = 2 * ($base + $altura);
    $calc_area = $base * $altura;
    $calc_diagonal = sqrt(pow($base, 2) + pow($altura,2)); // pow é a para calcular a base elevada tipo base^2
    // e o sqrt calcula a raiz quadrada

    echo "O perimetro é $calc_perímetro \n";
    echo "Á area é $calc_area \n";
    echo "Á diagonal é $calc_diagonal";