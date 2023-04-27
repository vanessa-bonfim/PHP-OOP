<?php

// característica base
class Familia
{
    protected $corDosOlhos = 'azuis';
}

// O Pai herdou a característica base da Familia
// O pai tem olhos azuis
class Pai extends Familia {}

// O Filho herdou a característica base do Pai
// O filho tem olhos azuis
class Filho extends Pai
{
    public function mostraCorDosOlhosHerdadosDaFamilia()
    {
        return 'Eu tenho olhos ' . $this->corDosOlhos;
    }
}

$filho = new Filho();
// mostra a característica herdada
// -> "Eu tenho olhos azuis"
echo $filho->mostraCorDosOlhosHerdadosDaFamilia();