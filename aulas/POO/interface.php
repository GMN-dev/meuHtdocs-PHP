<?php

interface Clientes{
    public function carteira();
    public function showShopCar();
}


class Clientepremium implements Clientes{
    private $itens;
    private $dinheiro;

    public function setItens($valor){
        $this->itens = $valor;
    }
    public function getItens(){
        return $this->itens;
    }


    public function setDinheiro($valor){
        $this->dinheiro = $valor;
    }
    public function getDinheiro(){
        return $this->dinheiro;
    }


    public function carteira(){
        echo "Seu saldo é de $this->dinheiro";
    }

    public function showShopCar(){
        echo 'Seu carrinho de compras:';
        foreach ($this->getItens() as $i) {
            echo $i . "<br>";
        };
    
    
    }
}

$alberto = new Clientepremium();
$alberto->setItens(['mamão', 'chocolate', 'ovo']);
$alberto->setDinheiro(456.56);
$alberto->showShopCar();
echo "<br>";
$alberto->carteira();


?>