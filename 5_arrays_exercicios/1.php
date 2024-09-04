<?php

    $array = [];

    for ($i = 1; $i <= 10; $i++) {
        $array[] = $i * 5;
    }

    foreach ($array as $valor) {
        echo $valor ."\n";
    }