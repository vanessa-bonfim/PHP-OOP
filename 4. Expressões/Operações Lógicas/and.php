<?php

//Teste utilizando o operador lógico "e" onde a deve ser igual a 2 e b deve ser igual a 2 também  
$a = 2;
$b = 2;
if($a == 2 && $b == 2)
{  
   echo "Teste positivo";
}  

 //Neste caso c é igual a 2, entretanto d não é igual a 2, logo este teste não terá como resposta verdadeiro  
$c = 2;
$d = 3;
if($c == 2 && $d == 2)
{  
    echo "Teste positivo";
}  

 //Neste caso de teste g é igual a 2 e f é diferente de 3, logo este teste terá como resposta verdadeiro  
$g = 2;
$f = 2;
if($g == 2 && $f != 3)  
{  
    echo "Teste positivo"; 
}