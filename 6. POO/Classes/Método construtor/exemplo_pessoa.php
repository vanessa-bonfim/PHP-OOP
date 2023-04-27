<?php

class Pessoa {
    private $nome;
    private $idade;

    public function __construct($nomePessoa, $idadePessoa)
    {
        $this->nome = $nomePessoa;
        $this->idade = $idadePessoa;
    }

    public function mostreQuemSouEu()
    {
        return "Olá meu nome é " . $this->nome . " e tenho " . $this->idade . " anos de idade.\n";
    }
}

// "Maria" e 47 são passados para o nosso método construtor da classe
// __construct($nomePessoa, $idadePessoa)
$maria = new Pessoa("Maria", 47);
echo $maria->mostreQuemSouEu();

// "Pedro" e 22 são passados para o nosso método construtor da classe
// __construct($nomePessoa, $idadePessoa)
$pedro = new Pessoa("Pedro", 22);
echo $pedro->mostreQuemSouEu();