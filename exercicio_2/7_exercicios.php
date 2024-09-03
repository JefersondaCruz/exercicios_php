<?php

    $idade = readline("Digite a idade do nadador: ");

    if ($idade < 5 ) {
        echo "O nadador nao tem idade suficiente! \n";
    } else if ($idade >= 5 && $idade <= 7) {
        echo "Categoria: Infantil A";
    } else if ($idade >= 8 && $idade <= 10) {
        echo "Categoria: Infantil B";
    } else if ($idade >= 11 && $idade <= 13) {
        echo "Categoria: Juvenil A";
    } else if ($idade >= 14 && $idade <= 17) {
        echo "Categoria: Juvenil B";
    } else if ($idade >= 18) {
        echo "Categoria: Senior";
    }
