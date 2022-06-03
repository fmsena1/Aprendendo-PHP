<?php 

  $lista = [1, "João", 2, 3, "Maria", "Otávio", 4, 5, 6, 7];


  $x = count($lista);
  $i = 0;
  while($i < $x){

    if(is_string($lista[$i])){
        echo $lista[$i];

    }

       $i++; 
  }