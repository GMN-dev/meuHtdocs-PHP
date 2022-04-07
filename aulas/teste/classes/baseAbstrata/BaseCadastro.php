<?php
namespace baseAbstrata;

interface mainClass{
    public function showCar();
    public function showMoney();
}

abstract class BaseCadastro implements mainClass{
    private $email;
    private $senha;
    public $nome;
    public $shopCar;
    public $money;

    public function setPrivates($emailInput, $senhaInput, $nomeInput, $moneyInput){
        $this->email = $emailInput;
        $this->senha = $senhaInput;
        $this->nome = $nomeInput;
        $this->money = $moneyInput;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function showCar(){
        echo $this->shopCar;
    }

    public function showMoney(){
        echo $this->money;
    }
}


?>