<?php

class Cadastro{
    private $nome;
    private $email;
    private $senha;

    public function setPrivates($nomeInput, $emailInout, $senhaInput){
        $this->nome = $nomeInput;
        $this->email = $emailInout;
        $this->senha = $senhaInput;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function __toString(){
        return json_encode([
            'nome'=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ]);
    }
    
    

}


?>