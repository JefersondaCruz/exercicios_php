<?php       

function SomarNumeros ($a, $b, $c) {

    $menor = min($b, $c);
    $maior = max($b, $c);

    for ($i = $menor; $i <= $maior; $i++) {

        

        if($a % 2 == 0){
            

        }

    }


    return "A = $a ,B = $menor e C = $maior";

  
}

echo SomarNumeros (readline("Digite o valor de A: "),readline("Digite o valor de B: "), readline("Digite o valor de c: "));
