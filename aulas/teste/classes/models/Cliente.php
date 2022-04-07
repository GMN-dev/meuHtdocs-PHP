<?php
namespace models;
use baseAbstrata\BaseCadastro;

class Cliente extends BaseCadastro{
    
    public function setShopCar($itens){
        $this->shopCar = $itens;    
    }

    public function showCar(){
        foreach ($this->shopCar as $iten){
            echo "os seguintes itens foram adicionados: <br>";
            echo $iten . '<br>';
        }
    }
}
?>