<?php 

    $array = [];

    for ($i = 0; $i < 10; $i++)  {
        $array[$i] = (int)readline("Digite um numero: ");
    }

   $arrayrever = array_reverse($array);

   print_r($arrayrever);