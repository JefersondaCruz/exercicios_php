<?php



$maior = 0;
$menor = PHP_INT_MAX; // ponhar o maximo do valor inteiro na variavel se ter que declarar um valor X
echo "Digite 0 para a operação parar: \n";

for ($contador = 1; $contador <= 10; $contador++) {

    $numero = readline("Digite um numero: ");
    

        if ($numero == 0) {
            echo "a operação parou \n";
            break;
        }
        if ($numero > $maior) {
            $maior = $numero;
        }
        if ($numero < $menor ) {
            $menor = $numero;
        }
        
        
}

echo "O numero maior foi: $maior \n";
echo "O numero menor foi: $menor \n";
echo "$soma \n";