<?php
namespace models;
use models\Cliente;

class ClientPremium extends Cliente{
    public function showPremium(){
        echo "parabens $this->nome, sua conta é premium";
    }

}

?>