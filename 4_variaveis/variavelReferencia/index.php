<?php

$x=10;

$y = & $x;

echo $x;
echo "<br>";
echo $y;

$y = 15;

//Atribuição após ref
echo "<br>";
echo $x;
echo "<br>";
echo $y;

$x=20;
//Ref 2
echo "<br>";
echo $x;
echo "<br>";
echo $y;


$nome = "Filipe";

$nome2=& $nome;

echo"<br>";
echo $nome;
echo "<br>";
echo $nome2;

$nome2="Sena";

echo"<br>";
echo $nome;
echo "<br>";
echo $nome2;
