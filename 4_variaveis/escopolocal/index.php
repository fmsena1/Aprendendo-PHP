<?php

$x=10;

echo "$x Escopo Global <br>";

    function teste(){

        $x=5;
        echo "$x Escopo Local <br>";
    }

    teste();