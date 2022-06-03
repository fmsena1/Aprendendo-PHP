<?php

    $n1 = 12;
    $n2 = 89;
    $n3 = "teste";

    if(is_int($n1)){

        $mult = $n1 * 2;

         if ($mult >= 100){

            echo "Este número é maior que 100. <br>" ;

        } else {
            echo "O número não é maior que 100. <br>";

        }


    }else {
        echo "Não é um número. <br>" ;

    }


    if(is_int($n2) || is_float($n2)){

        $mult = $n2 * 2;

         if ($mult >= 100){

            echo "Este número é maior que 100. <br>" ;

        } else {
            echo "O número não é maior que 100. <br>";

        }


    }else {
        echo "Não é um número. <br>" ;

    }

    if(is_int($n3)){

        $mult = $n1 * 2;

         if ($mult >= 100){

            echo "Este número é maior que 100. <br>" ;

        } else {
            echo "O número não é maior que 100. <br>";

        }


    }else {
        echo "Não é um número. <br>" ;

    }