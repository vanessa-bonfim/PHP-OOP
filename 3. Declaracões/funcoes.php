<?php

function nome_da_funcao($parametro1, $parametro2)   
{  
    return $parametro1 * $parametro2; 
}  

function nome_da_funcao2()   
{  
    return 1;
}

function nome_da_funcao3($parametro)   
{  
    $parametro = "Novo Valor";
}

// chamaos a funcao
echo nome_da_funcao(10, 5)."\n";

// chamaos a funcao 2
echo nome_da_funcao2(9)."\n";

// chamaos a funcao 3
nome_da_funcao3("Valor")."\n";
