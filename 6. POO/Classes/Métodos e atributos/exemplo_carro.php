<?php

class Carro {
    private $modelo;

    public function __construct($modeloCarro)
    {
        $this->modelo = $modeloCarro;
    }
    
    public function ligarOCarro() 
    {
        echo 'O carro de modelo ' . $this->modelo . ' foi ligado';
    }
}

$carro = new Carro("Ferrari");
$carro->ligarOCarro();