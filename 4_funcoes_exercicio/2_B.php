<?php

function multiplo ($x) {
    if($x % 2 == 0){
        echo "O numero $x é par \n";
    } else {
        echo "O numero $x é impar \n" ;
    }
}
multiplo (readline("Digite um numero: "));