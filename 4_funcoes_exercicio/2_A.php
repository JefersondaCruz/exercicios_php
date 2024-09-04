<?php 

    function multiplo ($x) {
        if($x % 4 == 0){
            echo "O numero $x é multiplo de 4 \n";
        } else {
            echo "O numero $x não é multiplo de 4 \n" ;
        }
    }
    multiplo (readline("Digite um numero: "));

