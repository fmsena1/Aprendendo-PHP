<?php 

class Pessoa{

    function falar(){
        echo "Olá Pessoal!";

    }
}

$filipe = new Pessoa();

$filipe->nome = "Filipe";

echo $filipe->nome;

echo "<br>";

$filipe->falar();