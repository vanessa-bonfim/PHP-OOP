<?php

//Neste caso de teste a variável teste foi inicializada como falso, e foi verificado se teste não é verdadeiro  
$teste = false;
if (!$teste)  
{  
    echo "Teste positivo";
}  
  
//Neste caso teste a soma das variáveis a e b resulta em 5, e comparado se a mesma é maior que 7, entretanto o operador nao, verifica se a+b não são maiores que 7  
$a = 2;
$b = 3;
if (!($a+$b > 7))  
{  
    echo "Teste positivo";
}  