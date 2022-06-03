<?php

    $x = 4;
    $i = 30;


    while ($x < $i){
        echo $x ."<br>";

        $x = $x + 2;

        if($x >= 24){
            echo "Você chegou ao número 24. <br>";

            break;
        }
    }