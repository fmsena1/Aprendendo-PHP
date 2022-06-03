<?php 

    if(5 > 2){
        echo "Verdadeiro. <br>";

    }


    //condição falsa

    if(2 >= 5){
         
        echo "Não vai entrar no if.";

    }

    if(10 === 10 && 9 > 3){
        echo "Entrou if3 <br>";
    }


    //variaveis

    $a = 10;
    $b = 5;
    $c = "Deu certo, entrou no if 4";

    if($a >= $b){
        echo $c;

    }