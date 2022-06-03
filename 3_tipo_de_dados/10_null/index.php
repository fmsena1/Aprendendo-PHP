<?php

    echo NULL;

    $nome=NULL;

    if(is_null($nome)){
        echo"O valor é nulo.";
    }

    $nome="Filipe";
    echo "<br>";
    if(is_string($nome)){
        echo"O valor é string.";
    }
