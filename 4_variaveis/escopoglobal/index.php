<?php

$teste="asd";

echo "$teste global1 <br>";

if(5>2){
    $teste="dsa";
    echo "$teste if <br>";
}

echo "$teste global2 <br>";

     function ola(){

        $teste="FILIPE";

        echo "$teste local <br>";

     }

     ola();



     function testeGlobal(){

        global $teste;

        echo "$teste global função <br>";

     }

     testeGlobal();