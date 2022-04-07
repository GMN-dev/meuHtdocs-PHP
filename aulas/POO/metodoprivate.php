<?php

class Animal {
    private $nome;
    private $especie;
    private $idade;

    //Para aumentar o controle da minha classe, usamos dois medotodos
    //para cada atributo, um para pegar e outro para validar
    // conhecido como geter's e seter's
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    

    public function getEspecie(){
        return $this->especie;
    }
    public function setEspecie($especie){
        $this->especie = $especie;
    }


    public function getIdade():float{
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }


    // função para exibir dados
    public function exibir(){
        echo $this->getEspecie(), $this->getNome(), $this->getIdade();
    }
}

$cachorro = new Animal();

$cachorro->setNome('Lilozinha');
$cachorro->setEspecie('Sharpey');
$cachorro->setIdade(3.4);

$cachorro->exibir();

//
?>