<?php
namespace cliente;

class Cadastro extends \Cadastro{
    public function sell(){
        echo "Venda registrada em nome de " . $this->getNome();
    }
}

?>