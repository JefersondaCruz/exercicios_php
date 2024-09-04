<?php   

    $ano_nascimento = readline("Digite o ano em que voce nasceu: ");
    $idade = 2024 - $ano_nascimento;

    echo "Sua idade é $idade";
     if ($idade >= 16) {
        echo " Voce já tem idade para votar! \n";
     } else {
        echo "Voce nao tem idade para votar! ";
     }
     
     
     if ($idade >= 18) {
        echo "Voce já tem idade para tirar a carteira de motorista! \n";
     }  else {
        echo "Voce nao tem idade para votar! \n";
     }
    
