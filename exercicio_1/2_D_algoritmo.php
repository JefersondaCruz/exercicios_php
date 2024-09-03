<?php

    $valor_do_Salario = readline("Digite o valor do seu salario Minimo: ");
    $Quilowatts_residencia = readline("Dige o valor gasto em quilowatts em sua residencia: ");
    
    $valor_de_100quilowatts = $valor_do_Salario / 7; // 200
    $valor_de_cada_quilowatts =   $valor_de_100quilowatts / $Quilowatts_residencia;

    $valor_ser_pago = $Quilowatts_residencia * $valor_de_cada_quilowatts;
    $valor_com_desconto = $valor_ser_pago * (1 - 10 / 100);

    echo "O valor de cada quilowatts é $valor_de_cada_quilowatts \n";
    echo "O valor á ser pago é $valor_ser_pago \n";
    echo "o valor com desconto de 10% é $valor_com_desconto \n";
    
