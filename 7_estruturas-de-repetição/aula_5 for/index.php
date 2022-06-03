<?php

    $nome = "Filipe";

//Contador; Condição; Incremento/Descremento

    for($i = 0; $i < 10; $i++){

        echo "Testando for $i. <br>";

        if($i == 4){

            echo "$nome <br>";

        }

        if($i == 8){

            break;

        }

    }