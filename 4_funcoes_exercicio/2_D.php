<?php       

function SomarNumeros ($a, $b, $c) {

    $menor = min($b, $c);
    $maior = max($b, $c);

    $somar = 0;

    for ($i = $menor; $i <= $maior; $i++) {

        if($i % $a == 0){
            
            $somar += $i;

        }

    }


    return "a soma entre o intervalo $b e $c é: $somar \n ";

}

echo SomarNumeros (readline("Digite o valor de A: "),readline("Digite o valor de B: "), readline("Digite o valor de c: "));
