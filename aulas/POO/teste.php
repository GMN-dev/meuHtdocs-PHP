<?php

class Teste{
    public $nome;
    public $idade;
    private $id;

    public function exiba(){
        echo "Seu nome: {$this->nome} <br> Sua idade: {$this->idade} <br> Sua id: {$this->id}";
    }

    public function setID($ide){
        $this->id = $ide;
    }
}

$tes = new Teste();
$tes->nome = 'gabriel';
$tes->idade = 21;


$tes->setID('5468-45');

$tes->exiba();

 ?>