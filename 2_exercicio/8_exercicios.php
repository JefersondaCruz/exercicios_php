<?php 

    $preço_etiqueta = readline("Digite o preço do produto: ");
    $fomar_de_pagamento = readline("Digite a forma de pagamento: À vista em dinheiro; À vista no cartão; em 2 vezes preço normal; em 3 vezes 10% de juros");

    if ($fomar_de_pagamento == "À vista em dinheiro"){
        $preço_etiqueta -=  $preço_etiqueta * (10 / 100);
        echo "O valor fica R$ $preço_etiqueta à vista.";
    } else if ($fomar_de_pagamento == "À vista no cartão"){
        $preço_etiqueta -=  $preço_etiqueta * (5 / 100);
        echo "O valor fica R$ $preço_etiqueta à vista no cartão.";
    } else if ($fomar_de_pagamento == "em 2 vezes preço normal"){
        $preço_etiqueta /= 2;
        echo "fica 2x de $preço_etiqueta";
    } else if ($fomar_de_pagamento == "em 3 vezes 10% de juros"){
        $preço_etiqueta += $preÃ§o_etiqueta * (10 / 100);
    } else {
        echo "Se atente de escrever como informado!";
    }