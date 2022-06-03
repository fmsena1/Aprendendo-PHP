<?php 

$f ="Olá! Boa tarde!";

$t='Meu nome é Filipe';

echo $f;
echo "<br>";
echo $t;

if (is_string($f)){
    echo "<h2>".$f.": É uma string.</h2>";
}else {
    echo "<h2>".$f.":Não é uma string</h2>";
}

