<?php

    $idade1 = 18;
    $idadeUsuario = 12;

    $msg = " Você é maior de idade.<br>";
    $msgMenor = "Você é menor de idade. <br>";

    if($idadeUsuario >= $idade1){
        echo $msg;
    }else{
        echo $msgMenor;
    }

    