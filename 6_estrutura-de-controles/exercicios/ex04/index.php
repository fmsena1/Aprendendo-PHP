<?php

    $velocidadeCarro = 37.9;
    $velocidadePermitida = 40;

    if($velocidadeCarro < $velocidadePermitida){
        echo "Sua velocidade atual é ".$velocidadeCarro .", você está na velocidade correta. <br>" ;
    }else if ($velocidadeCarro == $velocidadePermitida){
        echo "Cuidado! Você está proximo de ultrapassar a velocidade permitida. <br>";
    }else if ($velocidadeCarro > $velocidadePermitida){
        echo "Você foi multado, por ultrapassar a velocidade permitida. <br>";
    }