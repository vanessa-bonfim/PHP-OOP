<?php

class Gato {

    private $nome;

    public function __construct($nomeGato)
    {
        $this->nome = $nomeGato;
    }

    public function meow()
    {
        echo "O gato $this->nome fez meow!";
    }
}

// Foi declarado uma instância da classe gato com o palavra reservada "new"
// Nota: quando uma instância é criada, estamos na verdade a criar um "objeto" daquele "molde".
$felino = new Gato("Felix");
$felino->meow();