<?php

//Teste utilizando o operador lógico "ou" onde a deve ser igual a 2 ou pelo menos b deve ser igual a 2, qualquer um destes satisfaz o teste oferecendo-lhe verdadeiro como resposta  
$a = 2;
$b = 2;
if ($a == 2 || $b == 2)  
{  
    echo "Teste positivo";
}
  
//Neste caso c é igual a 2, entretanto d não é igual a 2, mas qualquer uma das condições oferece ao teste como resposta: verdadeiro  
$c = 2;
$d = 3;
if($c == 2 || $d == 2)  
{  
    echo "Teste positivo"; 
}  