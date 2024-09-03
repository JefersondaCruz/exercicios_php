<?php

    $contador = 0;

    for($i = 50; $i <= 70; $i+=2) {
        echo "$i \n ";
        $contador += $i;
    }
    echo "A soma é : $contador \n";
    $media = $contador / $i;
    echo "A média é : $media \n";